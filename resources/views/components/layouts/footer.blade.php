<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        <a href="https://www.linkedin.com/in/nabeel-mehdi-imrani-070498230/" target="_blank"><i
                class="fab fa-linkedin"></i></a>&nbsp;&nbsp;
        <a href="https://github.com/nabeelimrani" target="_blank"><i class="fab fa-github"></i></a>&nbsp;&nbsp;
        <a href="https://www.instagram.com/billu_badshaw/" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>

    <strong>Copyright &copy; 2023-2024 <a href="{{ url('/home') }}">Feedback Tool</a>.</strong> All rights reserved.
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>
<script src="{{ asset('frontend/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>
<script src="{{ asset('fontawesome/js/all.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('frontend/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('frontend/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<script src="{{ asset('frontend/dist/js/demo.js') }}"></script>

<script src="{{ asset('frontend/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<script src="{{ asset('frontend/plugins/toastr/toastr.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Trumbowyg JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/trumbowyg@2.25.1/dist/trumbowyg.min.js"></script>
<script type="text/javascript">
    var url = "{{ route('changeLang') }}";
    $(".changeLang").change(function(event) {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>
</body>

</html>
