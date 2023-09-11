<form id="productListingSearchbar">
  <div class="row g-3">
    <div class="col-lg-3 col-md-4 col-12">
      <div class="select-destination dropdown">
        <button type="button" id="selectDestination" class="form-control dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Destination
        </button>
        <ul class="dropdown-menu">
          <li>
            <a class="dropdown-item" href="#">St. Petersburg, Florida</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Orlando, Florida</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Medellin, Colombia</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Tulum, Mexico</a>
          </li>
        </ul>
      </div>
      <!-- /.select-destination -->
    </div>
    <div class="col-lg-3 col-md-4 col-12">
      <div class="select-daterange input-group">
        <input type="text" id="dateRange" class="form-control" placeholder="Check-in | Check-out" autocomplete="off">
        <button class="input-group-text">
          <i class="material-symbols-outlined">
            calendar_month
          </i>
        </button>
      </div>
      <!-- /.select-daterange -->
    </div>
    <div class="col-md-auto col-12">
      <a href="" class="btn btn-secondary w-100">Search</a>
    </div>
  </div>
  <!-- /.row g-3 -->
</form>
<!-- /#productListingSearchbar -->