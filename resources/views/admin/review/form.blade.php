  
    <!-- Form Start -->
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" value="{{ isset($data->title)?$data->title:'' }}" placeholder="Title" required>

        <div class="invalid-feedback">
          Please Provide Title.
        </div>
    </div>

    <div class="form-group">
        <label for="sub_title">Sub Title</label>
        <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{ isset($data->sub_title)?$data->sub_title:'' }}" placeholder="Sub Title">

        <div class="invalid-feedback">
          Please Provide Sub Title.
        </div>
    </div>

    <div class="form-group">
        <label for="short_desc">Short Desc</label>
        <textarea class="form-control" name="short_desc" id="short_desc" rows="4">{{ isset($data->short_desc)?$data->short_desc:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Short Desc.
        </div>
    </div>

    <div class="form-group">
        <label for="details">Details</label>
        <textarea class="form-control textMediaEditor" name="details" id="details" rows="8" required>{{ isset($data->description)?$data->description:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Details.
        </div>
    </div>

    <div class="form-group">
        <label for="logo_path">Logo</label>
        <input type="file" class="form-control" name="logo_path" id="logo_path" placeholder="Upload Logo">

        <div class="invalid-feedback">
          Please Provide Logo.
        </div>
    </div>

    <div class="form-group">
        <label for="thumb_path">Thumbnail</label>
        <input type="file" class="form-control" name="thumb_path" id="thumb_path" placeholder="Upload Thumbnail">

        <div class="invalid-feedback">
          Please Provide Thumbnail.
        </div>
    </div>

    <div class="form-group">
        <label for="rating">Rating</label>
        <input type="text" class="form-control" name="rating" id="rating" value="{{ isset($data->rating)?$data->rating:'' }}" placeholder="Rating" required>

        <div class="invalid-feedback">
          Please Provide Rating.
        </div>
    </div>

    <div class="form-group">
        <label for="ref_link">Ref Link</label>
        <input type="url" class="form-control" name="ref_link" id="ref_link" value="{{ isset($data->ref_link)?$data->ref_link:'' }}" placeholder="Ref Link" required>

        <div class="invalid-feedback">
          Please Provide Ref Link.
        </div>
    </div>

    <div class="form-group">
        <label for="pros">Pros</label>
        <textarea class="form-control summernote" name="pros" id="pros" rows="4">{{ isset($data->pros)?$data->pros:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Pros.
        </div>
    </div>

    <div class="form-group">
        <label for="cons">Cons</label>
        <textarea class="form-control summernote" name="cons" id="cons" rows="4">{{ isset($data->cons)?$data->cons:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Cons.
        </div>
    </div>

    <div class="form-group">
        <label for="cons">Key Features</label>
        <textarea class="form-control summernote" name="key_features" id="key_features" rows="4">{{ isset($data->key_features)?$data->key_features:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Key Features.
        </div>
    </div>

    <div class="form-group">
        <label for="order">Order No</label>
        <input type="number" class="form-control" name="order" id="order" value="{{ isset($data->order)?$data->order:'' }}" placeholder="Order No" required>

        <div class="invalid-feedback">
          Please Provide Order No.
        </div>
    </div>

    <div class="form-group">
        <label for="meta_keyword">Meta Keyword</label>
        <textarea class="form-control" name="meta_keyword" id="meta_keyword" rows="4">{{ isset($data->meta_keyword)?$data->meta_keyword:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Meta Keyword.
        </div>
    </div>

    <div class="form-group">
        <label for="meta_desc">Meta Desc</label>
        <textarea class="form-control" name="meta_desc" id="meta_desc" rows="4">{{ isset($data->meta_desc)?$data->meta_desc:'' }}</textarea>

        <div class="invalid-feedback">
          Please Provide Meta Desc.
        </div>
    </div>

    @if(isset($data))
    <div class="form-group">
        <label for="status">Select Status</label>
        <select class="wide" name="status" id="status" data-plugin="customselect">
            <option value="1" @if( $data->status == 1 ) selected @endif>Active</option>
            <option value="0" @if( $data->status == 0 ) selected @endif>Inactive</option>
        </select>
    </div>
    @endif

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    <!-- Form End -->
  