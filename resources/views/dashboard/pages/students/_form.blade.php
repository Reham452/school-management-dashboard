<div class="form-group">
  <x-form.input label="اسم الطالب" type="text" name="name" placeholder="أدخل اسم الطالب" :value="$student->name ??''"/>
</div>
<div class="form-group">
  <x-form.input label="تاريخ الميلاد" type="date" name="birth_date" placeholder="أدخل تاريخ الميلاد" :value="$student->birth_date ??''"/>
</div>
<div class="form-group">
  <x-form.input label="البريد الإلكتروني" type="email" name="email" placeholder="أدخل البريد الإلكتروني" :value="$student->email ??''"/>
</div>
<div class="form-group">
  <x-form.input label="رقم الهاتف" type="tel" name="phone" placeholder="أدخل رقم الهاتف" :value="$student->phone ??''"/>
</div>
<div class="form-group">
  <x-form.select label="الصف الدراسي" name="classroom_id" :options="$classrooms"  :selected="$student->classroom_id ?? ''" />
</div>