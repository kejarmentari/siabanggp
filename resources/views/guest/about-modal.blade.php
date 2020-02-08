<div class="modal fade"  id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content text-center p-4" style="background:#fff">
        <h3 class="modal-title mb-0" id="aboutModalLabel">Tentang Aplikasi</h3>
        <div class="modal-body">
          <h4 style="width: 70%; margin: 1rem auto;" class="">{{ $setting->app_full_name }}</h4>
            <p>{{ $setting->app_description }}</p>
        </div>
    </div>
  </div>
</div>
