<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            {!! html()->form('POST', route('products.store'))->id('form-item')->class('form-horizontal')->attribute('data-toggle', 'validator')->attribute('enctype', 'multipart/form-data')->open() !!}
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
                            <label >Name</label>
                            {!! html()->text('nama')->class('form-control')->id('nama')->attribute('autofocus', true)->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Price</label>
                            {!! html()->text('harga')->class('form-control')->id('harga')->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Quantity</label>
                            {!! html()->text('qty')->class('form-control')->id('qty')->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>


                        <div class="form-group">
                            <label >Image</label>
                            {!! html()->file('image')->class('form-control')->id('image') !!}
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Category</label>
                            {!! html()->select('category_id', $category)
                                ->class('form-control select')
                                ->placeholder('-- Choose Category --')
                                ->id('category_id')
                                ->required() !!}
                            <span class="help-block with-errors"></span>
                        </div>




                    </div>
                    <!-- /.box-body -->

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>

            {!! html()->form()->close() !!}
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->