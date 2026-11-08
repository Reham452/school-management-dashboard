<div class="form-group">
  <x-form.input label="اسم المعلم" type="text" name="name" placeholder="أدخل اسم المعلم" :value="$teacher->name ??''"/>
</div>
<div class="form-group">
  <x-form.input label="التخصص" type="text" name="specialization" placeholder="أدخل تخصص المعلم" :value="$teacher->specialization ??''"/>
</div>
<div class="form-group">
  <x-form.select label="الصف الدراسي" name="classroom_id" :options="$classrooms"  :selected="$teacher->classroom_id ?? ''" />
</div>
<div class="form-group">
  <x-form.input label="الإيميل" type="email" name="email" placeholder="أدخل الإيميل الخاص بالمعلم" :value="$teacher->email ??''"/>
</div>
<div class="form-group">
  <x-form.input label="رقم الهاتف" type="tel" name="phone" placeholder="أدخل رقم الهاتف الخاص بالمعلم" :value="$teacher->phone ??''"/>
</div>