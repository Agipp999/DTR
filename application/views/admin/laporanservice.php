<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Service</h4>
                  </div>
                  <div class="card-body">
            <div class="col-sm-12">
                <div class="card-box table-responsive">

                    <br>
                    <form action="<?php echo base_url('dompdfService');?>" target="_blank" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-4">Date Range</label>
                        <div class="col-sm-8">
                            <div class="input-daterange input-group" id="tanggal">
                                <input type="date" class="form-control" value="<?php echo date('d-m-y'); ?>" name="start" />
                                <span class="input-group-addon bg-custom b-0 text-white">to</span>
                                <input type="date" class="form-control" value="<?php echo date('d-m-y'); ?>" name="end" />
                            </div>
                        </div>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="btn btn-success btn-sm" >Cetak Laporan</button>
                    </div>
                </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->