@extends('layouts.forms.summons_plaints_form_layout')
@section('content')

<div class="content-wrapper">
  <div class="container-full">
    <div class="content-header">
      <div class="d-flex align-items-center">
        <div class="me-auto">
          <h4 class="page-title">Summons & Plaints</h4>
          <div class="d-inline-block align-items-center">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Summons & Plaints</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">New Summons & Plaint</h3>
            </div>
            <form action="submit_data.php" method="post">
              <div class="box-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="case_id">Case ID:</label>
                      <input type="text" class="form-control" id="case_id" name="case_id" required>
                    </div>
                    <div class="form-group">
                      <label for="nature_of_claim">Nature of Claim:</label>
                      <input type="text" class="form-control" id="nature_of_claim" name="nature_of_claim" required>
                    </div>
                    <div class="form-group">
                      <label for="type_of_claim">Type of Claim:</label>
                      <select class="form-control" id="type_of_claim" name="type_of_claim" required>
                        <option value="">Select Type</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="court_location">Court Location:</label>
                      <input type="text" class="form-control" id="court_location" name="court_location" required>
                    </div>
                    <div class="form-group">
                      <label for="date_of_filing">Date of Filing:</label>
                      <input type="date" class="form-control" id="date_of_filing" name="date_of_filing" required>
                    </div>
                    <div class="form-group">
                      <label for="reserve">Reserve:</label>
                      <input type="number" class="form-control" id="reserve" name="reserve" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="parties">Parties:</label>
                      <textarea class="form-control" rows="3" id="parties" name="parties" required></textarea>
                    </div>
                    <div class="form-group">
                      <label for="date">Date:</label>
                      <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <div class="form-group">
                      <label for="advocate">Advocate:</label>
                      <input type="text" class="form-control" id="advocate" name="advocate" required>
                    </div>
                    <div class="form-group">
                      <label for="firm">Firm:</label>
                      <input type="text" class="form-control" id="firm" name="firm" required>
                    </div>
                    <div class="form-group">
                      <label for="costs">Costs:</label>
                      <input type="number" class="form-control" id="costs" name="costs" required>
                    </div>
                    <div class="form-group">
                      <label for="attachments">Attachments:</label>
                      <input type="file" class="form-control-file" id="attachments" name="attachments" required multiple>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

@endsection