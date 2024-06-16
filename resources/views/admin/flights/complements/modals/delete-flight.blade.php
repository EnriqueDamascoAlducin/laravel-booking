
<!-- Modal -->
<div class="modal fade removeUserModal show" style="display: block;" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true" role="dialog">
  <div class="modal-dialog bg-danger">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">{{__('Delete Flight ')}} {{ $selectedFlight->name }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  wire:click="closeModals()"></button>
      </div>
      <div class="modal-body text-white">
        {{__('Are you sure to delete the flight')}} {{ $selectedFlight->name  }}?
        <p> {{__('This action cannot be undone')}} </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="closeModals()">{{__('Close')}}</button>
        <button type="button" class="btn btn-primary" wire:click="confirmRemove()">{{__('Sure')}}</button>
      </div>
    </div>
  </div>
</div>