@if (session('success'))
    <div class="alert alert-dismissible fade show text-white" 
         style="background-color: #1a1f1c; border-left: 5px solid #a3b899; border-top: 1px solid #2d3731; border-right: 1px solid #2d3731; border-bottom: 1px solid #2d3731; box-shadow: 0 4px 15px rgba(0,0,0,0.3);"  >
        <i class="fas fa-check-circle ml-2" style="color: #a3b899;"></i> 
         <span style="color: #e2e8f0; font-weight: 500;">{{ session('success') }}</span>
        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close" style="opacity: 0.6; padding: 0.75rem 1.25rem;">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif