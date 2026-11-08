<div class="form-group">
  <x-form.input label="اسم الصف" type="text" name="name" placeholder="أدخل اسم الصف" :value="$classroom->name ??''"/>
</div>
<div class="form-group">
  <x-form.textarea label="الوصف" id="description" name="description" placeholder="أدخل وصف الصف" rows="3" :value="$classroom->description ??''" />
</div>
<div class="form-group">
  <x-form.input label="السعة الإستعابية" type="number" name="capacity" placeholder="أدخل السعة الإستعابية" :value="$classroom->capacity ??''" min="0"/>
</div>