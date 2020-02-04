    <!-- Show modal content -->
    <div id="showModal-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">{{ $title }} Details View</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <!-- Details View Start -->
                    <h4><span class="text-highlight">Title:</span> {{ $row->title }}</h4>
                    <h6><span class="text-highlight">Sub Title:</span> {{ $row->sub_title }}</h6>

                    <hr/>
                    <p><span class="text-highlight">Short Desc:</span> {!! $row->short_desc !!}</p>
                    <hr/>
                    <p><span class="text-highlight">Details:</span> {!! $row->description !!}</p>

                    @if(is_file('uploads/'.$url.'/'.$row->logo_path))
                    <img src="{{ asset('uploads/'.$url.'/'.$row->logo_path) }}" alt="Logo">
                    <br/>
                    @endif

                    @if(is_file('uploads/'.$url.'/'.$row->thumb_path))
                    <img src="{{ asset('uploads/'.$url.'/'.$row->thumb_path) }}" alt="Thumb">
                    <br/>
                    @endif

                    <hr/>
                    <p><span class="text-highlight">Rating:</span> {{ $row->rating }}</p>
                    <p><span class="text-highlight">Ref Link:</span> {{ $row->ref_link }}</p>
                    <p><span class="text-highlight">Pros:</span> {!! $row->pros !!}</p>
                    <p><span class="text-highlight">Cons:</span> {!! $row->cons !!}</p>
                    <p><span class="text-highlight">Key Features:</span> {!! $row->key_features !!}</p>
                    <p><span class="text-highlight">Order No:</span> {{ $row->order }}</p>
                    <p><span class="text-highlight">Meta Keyword:</span> {!! $row->meta_keyword !!}</p>
                    <p><span class="text-highlight">Meta Desc:</span> {!! $row->meta_desc !!}</p>
                    <p><span class="text-highlight">Views:</span> {{ $row->views }}</p>

                    <hr/>
                    <p><span class="text-highlight">Status:</span> 
                    @if( $row->status == 1 )
                    <span class="badge badge-success badge-pill">Active</span>
                    @else
                    <span class="badge badge-danger badge-pill">Inactive</span>
                    @endif
                    </p>
                    <!-- Details View End -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->