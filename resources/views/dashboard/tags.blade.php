@extends('dashboard.layouts.app')


@section('bread')

    @include('dashboard.modules.breadcrumb')

@endsection

@section('content')

    <div class="row" id="tags">
        <div class="col-md-12 col-lg-12 tag_list" >
            <div class="box box-solid">
                <div class="box-header with-border update_tags_list">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Tags List</h3>
                    <a class="btn bg-blue pull-right" @click="addTag">
                        <i class="fa fa-edit"></i> Add Tag
                    </a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul>
                        <tag-list
                                v-for="tag in tags"
                                v-on:delete="deleteTag"
                                v-on:edit = "editTag"
                                v-bind:title="tag.name"
                                v-bind:id="tag.id"

                        >

                        </tag-list>
                    </ul>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-6 col-lg-4" v-if="addNew">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">Add New Tag</h4>
                    <div class="box-controls pull-right">
                        <a class="btn btn-sm btn-danger" @click="closeNewTag" href="#">X</a>
                        <a class="btn btn-sm btn-info" @click="addNewTag">Save Tag</a>

                    </div>
                </div>

                <div class="box-body">
                    <div class="form-group">
                        <label for="firstName1">Tag Name :</label>
                        <input type="text" class="form-control" v-model="newTagName">
                    </div>
                </div>
            </div>
        </div>







        <!-- Modal -->
        <div class="modal center-modal fade" id="modal-center" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Your content comes here</p>
                        <input type="text" v-model="editTagName">
                    </div>
                    <div class="modal-footer modal-footer-uniform">
                        <button type="button" class="btn btn-bold btn-pure btn-secondary modal_close" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-bold btn-pure btn-primary float-right" @click="saveChange">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.modal -->


        <div class="modal modal-danger fade" id="modal-danger" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Danger Modal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <p>One fine body…</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline close_delete_modal" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline float-right" @click="saveDelete">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>


@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <script src="{{ asset('dashboard/vue/tags_page.js') }}"></script>
@endsection