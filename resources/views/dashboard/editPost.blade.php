@extends('dashboard.layouts.app')

@section('style')
    <link href="{{ asset('dashboard/assets/vendor_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/assets/vendor_components/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('dashboard/css/master_style.css')}}" rel="stylesheet" type="text/css">
@endsection


@section('bread')
    @include('dashboard.modules.breadcrumb')
@endsection


@section('content')

    <!-- /.box-header -->
    <div class="box-body wizard-content" style="background: white;" id="v_new_post_form" >


        <form action="{{ route('add_post') }}" method="post" class="" enctype="multipart/form-data">
            <!-- Step 1 -->
            @csrf
            <h6>Post Info</h6>
            <section>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="firstName1">Title : </label>
                            <input type="text" class="form-control" name="title"  v-model.trim="title" v-on:keyup="createPath" id=""> </div>

                    </div>
                    <div class="col-md-2" style="align-items: center;display: flex;">
                        <input type="checkbox" id="basic_checkbox_1" v-model="autoCreate" v-on:click="updatePath">
                        <label for="basic_checkbox_1">Auto create path</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="emailAddress1">General Tag  :</label>
                            <div class="form-group">
                                <select class="form-control select2" name="generalType"  style="width: 100%;">
                                    @foreach($tags as $tag)
                                        @foreach($post->tags as $selected)
                                            <option  value="{{ $tag->id }}" @if($selected->id == $tag->id) selected @endif>{{ $tag->name }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Multiple</label>
                            <select class="form-control select2" multiple="multiple" name="customTypes[][tag_id]" data-placeholder="Select a State"
                                    style="width: 100%;">
                                @foreach($tags as $tag)
                                    @foreach($post->tags as $selected)
                                        <option  value="{{ $tag->id }}" @if($selected->id == $tag->id) selected @endif>{{ $tag->name }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="phoneNumber1">Path :</label>
                            <input type="text" class="form-control"  name="path" id="" v-bind:value="path">
                        </div>
                    </div>
                </div>

            </section>
            <!-- Step 2 -->
            <section id="thumbnailSettings">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="phoneNumber1">Thumbnail :</label>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <select v-model="thumbnailType" name="thumbnailType" class="form-control">
                                        <option value="image">Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div v-if="thumbnailType == 'image'" class="mt-15">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Select Image</label>
                                        <input type="file" name="thumbnail" class="form-control">
                                    </div>

                                </div>
                                <div v-if="thumbnailType == 'video'" class="mt-15">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Youtube Video Link :</label>
                                        <input type="text" name="thumbnail_video" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                @if($post->thumbnailType == 'image')
                                    <img src="{{asset('images/post_thumbnails').'/'.$post->thumbnail }}" alt="" v-if="thumbnailType == 'image'">
                                @else
                                    <img src="" alt="" v-if="thumbnailType == 'image'">
                                @endif

                                @if($post->thumbnailType == 'video')
                                    <iframe src="{{ $post->thumbnail }}" frameborder="0" allowfullscreen="" v-if="thumbnailType == 'video'"></iframe>
                                @else
                                    <iframe src="" frameborder="0" allowfullscreen="" v-if="thumbnailType == 'video'"></iframe>
                                @endif
                            </div>

                        </div>


                    </div>
                </div>
            </section>

            <!-- Step 3 -->

            <section class="mt-40">
                <div class="row">
                    <div class="col-md-12">
                        <label for="phoneNumber1">Contnet :</label>
                        <textarea name="content" id="editor1" rows="10" cols="80">
                            {!! $post->content !!}
                        </textarea>
                    </div>
                </div>
            </section>
            <input type="submit" value="Add Post">
        </form>
    </div>
    <!-- /.box-body -->



@endsection



@section('scripts')

    <script>
        let thumbnailSettings = new Vue({
            el:'#v_new_post_form',
            data:{
                thumbnailType:'8779',
                title: "{{ $post->title }}",
                path:'',
                autoCreate:true
            },
            mounted:function(){
                this.path = "{{ $post->path }}";
                this.thumbnailType = "{{ $post->thumbnailType }}";
            },
            methods:{

                createPath:function (){
                    if(this.autoCreate){
                        this.path = this.title.split(' ').join('-');
                        this.path = this.path.replace(/\\|\/|\?/g, '');
                    }
                },
                updatePath:function (e) {
                    this.autoCreate = !this.autoCreate;
                    this.createPath();
                    if(!this.autoCreate)
                        this.path = '';
                }
            }
        })
    </script>
    <script src="{{ asset('dashboard/assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
    <!-- steps  -->
    <script src="{{ asset('dashboard/assets/vendor_components/jquery-steps-master/build/jquery.steps.js')}}"></script>

    <script src="{{ asset('dashboard/assets/vendor_components/popper/dist/popper.min.js')}}"></script>


    <!-- InputMask -->
    <script src="{{ asset('dashboard/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{ asset('dashboard/assets/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
    <!-- validate  -->
    <script src="{{ asset('dashboard/assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js')}}"></script>

    <!-- Sweet-Alert  -->
    <script src="{{ asset('dashboard/assets/vendor_components/sweetalert/sweetalert.min.js')}}"></script>

    <!-- wizard  -->
    <script src="{{ asset('dashboard/js/pages/steps.js')}}"></script>
    <script src="{{ asset('dashboard/js/pages/advanced-form-element.js')}}"></script>

    <script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
    <!-- development version, includes helpful console warnings -->
    <script>

        $(function(){
            $(document).on('click','a[href="#finish"]',function () {
                $('#v_new_post_form').submit();
            })
        })

    </script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>

@endsection