<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets') }}/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('assets') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets') }}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets') }}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets') }}/js/demo/chart-area-demo.js"></script>
<script src="{{ asset('assets') }}/js/demo/chart-pie-demo.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('#simulasi_id').select2({
            placeholder: "Pilih Simulasi",
            allowClear: true,
            width: '100%'
        });
    });

    $('#simulasi_id').val(null).trigger('change');
    $('#simulasi_id').val("{{ old('simulasi_id', $materi->simulasi_id ?? '') }}").trigger('change');
</script>