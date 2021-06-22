<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('template')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('template')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('bootstrap')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('bootstrap')}}/js/bootstrap.bundle.js"></script>
<script src="{{asset('bootstrap')}}/js/bootstrap.js"></script>
<script src="{{asset('bootstrap')}}/js/bootstrap.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('template')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('template')}}/js/sb-admin-2.min.js"></script>
<script src="{{asset('dropzone')}}/dist/min/dropzone.min.js"></script>
<script src="{{asset('dropzone')}}/dist/dropzone.js"></script>
<script src="{{asset('dropzone')}}/dist/dropzone-amd-module.js"></script>
<script src="{{asset('dropzone')}}/dist/min/dropzone-amd-module.min.js"></script>
<!-- Page level plugins -->
<script src="{{asset('template')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('template')}}/js/demo/datatables-demo.js"></script>