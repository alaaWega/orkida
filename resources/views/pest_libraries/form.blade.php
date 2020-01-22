<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
    <div class="fileupload fileupload-new" data-provides="fileupload">
    <span class="btn btn-primary btn-file"><span class="fileupload-new">صورة الأفات</span>
    <span class="fileupload-exists">تغير</span>
    <input type="file" name="image" required/></span>
        <span class="fileupload-preview"></span>
        <a href="#" required class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
        <span class="help-block with-errors errorName"></span>
    </div>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">العنوان</label>
    <input type="text" name="name_ar" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" name="name_en" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">الوصف</label>
    <textarea rows="2" cols="30" name="description_ar" class="form-control" required></textarea>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <textarea rows="2" cols="30" name="description_en" class="form-control" required></textarea>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">image title</label>
    <input type="text" name="image_title" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">Image alt</label>
    <textarea rows="2" cols="30" name="image_alt" class="form-control" required></textarea>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">slug ar</label>
    <input type="text" name="slug_ar" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">slug en</label>
    <input type="text" name="slug_en" required class="form-control">
    <span class="help-block with-errors errorName"></span>
</div>

<div class="form-group">
    <label for="exampleInputPassword1">تفعيل</label>
    <input data-onstyle="danger" checked type="checkbox" name="is_active"  data-toggle="toggle">
</div>