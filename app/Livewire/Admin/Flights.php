<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Flight;
use App\Models\FlightCategory;
use App\Models\FlightPhoto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Flights extends Component
{
    public $filterName, $filterStatus, $filterPage, $successMessage;
    public $isUpdatingPhotos, $isRemovingFlight, $isEditingPrices, $isAssigningCategory;
    public $flights, $availableCategory, $selectedFlight;
    public $price, $specialPrice, $kidsPrice, $kidsSpecialPrice, $assignedCategories;

    public function render()
    {
        if (!$this->filterPage) {
            $this->filterPage = 5;
        }

        $flights = Flight::limit($this->filterPage);

        if ($this->filterName) {
            $flights = $flights->where('name', 'like', '%' . $this->filterName . '%');
        }

        if ($this->filterStatus !== null && $this->filterStatus !== false && $this->filterStatus !== '') {
            $flights = $flights->where('status', $this->filterStatus);
        }
        $this->flights = $flights->get();
        return view('admin.flights.view');
    }

    public function showImagesModal($flight)
    {
        $this->selectedFlight = Flight::find($flight);
        $this->isUpdatingPhotos = true;
    }

    public function disableFlight($flight)
    {
        Flight::find($flight)->update(["status" => 0]);
        $this->successMessage = __('Flight Disabled Successfully');
    }

    public function enableFlight($flight)
    {
        Flight::find($flight)->update(["status" => 1]);
        $this->successMessage = __('Flight Enabled Successfully');
    }

    /** Remove Flight */
    public function removeFlight($flight)
    {
        $this->selectedFlight = Flight::find($flight);
        $this->isRemovingFlight = true;
    }

    public function confirmRemove()
    {

        foreach ($this->selectedFlight->photos as $photo) {
            Storage::disk('products')->delete($photo->name);
            $photo->delete();
        }
        $this->selectedFlight->main_photo = '';
        $this->selectedFlight->save();
        $this->selectedFlight->delete();
        $this->successMessage = __('Flight Has been Removed and this action can not be undone');
        $this->closeModals();
    }

    public function removeImage($image)
    {
        $photo = FlightPhoto::find($image);
        Storage::disk('products')->delete($photo->name);
        if (!Storage::disk('products')->exists($photo->flight->main_photo)) {
            $photo->flight->main_photo = 'no-image.png';
            $photo->flight->save();
        }
        $photo->delete();
    }


    public function showPricesModal($flight)
    {
        $this->selectedFlight = Flight::find($flight);
        $this->isEditingPrices = true;
        $this->price = $this->selectedFlight->price;
        $this->specialPrice = $this->selectedFlight->special_price;
        $this->kidsPrice = $this->selectedFlight->kids_price;
        $this->kidsSpecialPrice = $this->selectedFlight->kids_special_price;
    }

    public function updatePrices()
    {

        $this->selectedFlight->price = $this->price;
        $this->selectedFlight->special_price = $this->specialPrice;
        $this->selectedFlight->kids_price = $this->kidsPrice;
        $this->selectedFlight->kids_special_price = $this->kidsSpecialPrice;
        $this->selectedFlight->save();
        $this->closeModals();
    }

    public function showCategoryModal($flightId)
    {
        $this->selectedFlight = Flight::find($flightId);
        $this->isAssigningCategory = true;
        $this->availableCategory = $categories = Category::all();
        $this->assignedCategories = [];
        foreach ($categories as $category) {
            if ($category->getSpecificFlight($flightId)) {
                $this->assignedCategories [] = $category->id;
            }
        }
    }

    /**
     * Assign category to flight
     *
     * @return void
     */
    public function assignCategoryToFlights()
    {
        FlightCategory::where("flight_id", $this->selectedFlight->id)->whereNotIn("category_id", $this->assignedCategories)->forceDelete();

        foreach ($this->assignedCategories as $categoryId) {
            FlightCategory::updateOrCreate([
                "category_id" => $categoryId,
                "flight_id" => $this->selectedFlight->id
            ]);
        }
        $this->closeModals();
    }

    public function closeModals()
    {
        $this->isUpdatingPhotos = false;
        $this->isRemovingFlight = false;
        $this->isEditingPrices = false;
        $this->isAssigningCategory = false;

        $this->selectedFlight = null;
    }

    public function removeSuccess()
    {
        $this->successMessage = '';
    }
}
