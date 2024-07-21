<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! Html::form('POST', route('product_masuk.store'))->id('form-item')->class('form-horizontal')->attribute('data-toggle', 'validator')->attribute('enctype', 'multipart/form-data')->open() !!}
                {{ csrf_field() }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"></h3>
                </div>

                <div class="modal-body">
                    <input type="hidden" id="id" name="id">

                    <div class="box-body">
                        <div class="form-group">
                            <label>Products</label>
                            {!! Html::select('product_id', $products)
                                ->class('form-control select')
                                ->placeholder('-- Choose Product --')
                                ->id('product_id')
                                ->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label>Supplier</label>
                            {!! Html::select('supplier_id', $suppliers)
                                ->class('form-control select')
                                ->placeholder('-- Choose Supplier --')
                                ->id('supplier_id')
                                ->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            {!! Html::text('qty')->class('form-control')->id('qty')->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            {!! Html::text('tanggal')->class('form-control')->id('tanggal')->attribute('data-date-format', 'yyyy-mm-dd')->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            {!! Html::form()->close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->