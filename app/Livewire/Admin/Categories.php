<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Flight;
use App\Models\FlightCategory;

class Categories extends Component
{

    public $successMessage, $isAddingCategory, $isRemovingCategory, $isAssigningFlight;
    public $filterName, $filterPage;
    public $categories, $name, $urlKey, $assignedFlights;
    public $selectedCategory, $availableFlights;


    public function render()
    {
        if(!$this->filterPage) {
            $this->filterPage = 50;
        }
        $categories = Category::limit   ($this->filterPage);
        if (trim($this->filterName)) {
            $categories = $categories->where("name", "like", '%'. $this->filterName .'%');
        }
        $this->categories = $categories->get();
        return view('admin.categories.view');
    }

    public function showCategoryModal() {
        $this->isAddingCategory =  true;
    }

    public function createCategory() {
        if (!trim($this->urlKey)) {
            $this->urlKey = strtolower(str_replace(' ', '-', $this->name));
        }
        Category::create([
            "name" => $this->name,
            "url_key" => $this->urlKey
        ]);
        $this->successMessage = 'Category Created Successfully!';
        $this->closeModals();
    }

    public function editCategory($categoryId) {
        $this->selectedCategory = Category::find($categoryId);
        $this->name = $this->selectedCategory->name;
        $this->urlKey = $this->selectedCategory->url_key;
        $this->isAddingCategory =  true;
    }

    public function updateCategory() {
        if (!trim($this->urlKey)) {
            $this->urlKey = strtolower(str_replace(' ', '-', $this->name));
        }
        $this->selectedCategory->name = $this->name;
        $this->selectedCategory->url_key = $this->urlKey;
        $this->selectedCategory->save();
        $this->successMessage = 'Category Updated Successfully!';
        $this->closeModals();
    }

    public function removeCategory($categoryId) {
        $this->selectedCategory = Category::find($categoryId);
        $this->isRemovingCategory = true;
    }
    public function confirmRemove() {
        $this->selectedCategory->delete();
        $this->closeModals();
    }

    public function assignFlight($categoryId) {
        $this->isAssigningFlight = true;
        $this->availableFlights = $flights = Flight::all();
        $this->assignedFlights  = [];
        foreach($flights as $flight) {
            if ($flight->getSpecificCategory($categoryId)) {
                $this->assignedFlights [] = $flight->id;
            }
        }
        $this->selectedCategory = Category::find($categoryId);
    }

    public function assignCategoryToFlights() {
        FlightCategory::where("category_id", $this->selectedCategory->id)->whereNotIn("flight_id", $this->assignedFlights)->forceDelete();

        foreach ($this->assignedFlights as $flightId) {
            FlightCategory::updateOrCreate([
                "category_id" => $this->selectedCategory->id,
                "flight_id" => $flightId
            ]);
        }
        $this->closeModals();
    }

    public function closeModals() {
        $this->isAddingCategory =  false;
        $this->isRemovingCategory = false;
        $this->isAssigningFlight = false;
        
        $this->name = '';
        $this->urlKey = '';
        $this->selectedCategory = null;
    }
    public function removeSuccess() {
        $this->successMessage = '';
    }

}
