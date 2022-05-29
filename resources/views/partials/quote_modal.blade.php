<div class="modal fade" id="quote" tabindex="-1" role="dialog" aria-labelledby="quoteLabel" aria-hidden="true" style="z-index: 9999;">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <form method="POST" action="{{ url('quote') }}">
          @csrf

          <div class="modal-header">
            <h5 class="modal-title" id="quoteLabel">Get a Quotation</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="name" class="col-form-label">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="turnover" class="col-form-label">Your Turnover</label>
                      <select name="turnover" class="form-control h-100">
                        <option value="£0 to £20,000">£0 to £20,000</option>
                        <option value="£20,000 to £100,000">£20,000 to £100,000</option>
                        <option value="£101,000 to £200,000">£101,000 to £200,000</option>
                        <option value="£201,000 to £300,000">£201,000 to £300,000</option>
                        <option value="£301,000 to £400,000">£301,000 to £400,000</option>
                        <option value="£401,000 to £500,000">£401,000 to £500,000</option>
                        <option value="£501,000+">£501,000+</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="email" class="col-form-label">Email</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="vat_returns" class="col-form-label">Do you want us to complete your VAT returns?</label>
                      <select name="vat_returns" class="form-control h-100">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label for="cc" class="col-form-label">Country Code</label>
                      <select name="cc" class="form-control h-100">
                        @include('partials.cc')
                      </select>
                    </div>
                  </div>
                  <div class="col-md-3 col-lg-3">
                    <div class="form-group">
                      <label for="number" class="col-form-label">Telephone Number</label>
                      <input type="number" class="form-control" id="number" name="number" required>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="payroll" class="col-form-label">Do you want us to manage your payroll?</label>
                      <select id="payroll" name="payroll" class="form-control h-100">
                        <option value="None">No</option>
                        <option value="Weekly">Weekly</option>
                        <option value="Fortnightly">Fortnightly</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Directors Payroll">Directors' Payroll</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="business_type" class="col-form-label">Your Business Type:</label>
                      <select id="business_type" name="business_type" class="form-control h-100">
                        <option value="Sole Trader">Sole Trader</option>
                        <option value="Limited Company">Limited Company</option>
                        <option value="Partnership">Partnership</option>
                        <option value="LLP">LLP</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                      <label for="bookkeeping" class="col-form-label">Do you want us to complete your bookkeeping?</label>
                      <select id="bookkeeping" name="bookkeeping" class="form-control h-100">
                        <option value="0">No</option>
                        <option value="1">Yes</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6" id="noOfEmp" style="display: none;">
                    <div class="form-group">
                      <label for="employees" class="col-form-label">Number of Employees</label>
                      <input type="number" class="form-control" id="employees" name="employees" value="1">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6" id="transPerMonth" style="display: none;">
                    <div class="form-group">
                      <label for="transactions" class="col-form-label">Transactions per month</label>
                      <input type="number" class="form-control" id="transactions" name="transactions" value="1">
                    </div>
                  </div>

                  <div class="col-md-6 col-lg-6" id="noOfPartners" style="display: none;">
                    <div class="form-group">
                      <label for="partners" class="col-form-label">Number of Partners</label>
                      <input type="number" class="form-control" id="partners" name="partners" value="2">
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-6" id="llp" style="display: none;">
                    <div class="form-group">
                      <p>
                        <input type="checkbox" name="dormant" value="1">
                        Click here if your company will be <a>dormant</a>
                      </p>

                      </p>
                        <input type="checkbox" name="not_trading" value="1">
                        Click here if your company <a>will not be trading</a> 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Get Quotation">
            </div>
        </form>
    </div>
  </div>
</div>