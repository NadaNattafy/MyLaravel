@extends('website.layout.master')

@section('style')

<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style-ar.css')}}">

@endsection

<div class="fixed-bg">
    <img src="{{asset('assets/images/1.jpg')}}">
</div>

<div class="main-content">
    <div class="container">
        <h1 class="main-heading">خدماتنا</h1>

        <!--<textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea> -->
        <div class="border-bottom">
            <h1><strong>التصوير الإعلاني</strong></h1>
            <p>تصوير الإعلانات التجارية وإبراز المُنتج ومميزاته.</p>
            <p>وينقسم التصوير الإعلاني الى ثلاثة أنواع:</p>
            {{-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"> --}}
               التصوير الإعلاني بخلفية بيضاء والتركيز فيها على المنتج فقط بدون أي عناصر إضافية جمالية. ويستخدم هذا النوع غالباً في متاجر التسويق الالكترونية.
                التصوير الإعلاني بخلفية جمالية يظهر فيها المنتج وبعض العناصر معه المكونة أو المكملة للمنتج، مثل تصوير القهوة ووضع بجانبه السكر والملعقة وهكذا. ويستخدم هذا النوع للحملات الإعلانية الكبيرة.
                التصوير الإعلاني للمنتج بشكله الطبيعي دون تدخل المصور في التزيين الا في حال تطلب الامر.
            </textarea>
        </div>

        <div class="border-bottom">
            <h1><strong>المعالجة الرقمية</strong></h1>
            {{-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"> --}}
            وهي مرحلة ما بعد التقاط الصورة الإعلانية وهي تعتبر المرحلة الأهم لإخراج المنتج بشكل أفضل كإزالة الشوائب وازالة العناصر غير المرغوبة في الصورة الإعلانية.
        </textarea>
        </div>

        <div class="border-bottom">
            <h1><strong>تصوير الفيديو</strong></h1>
            <p>هو إبراز المنتج بأسلوب درامي إعلاني يعتمد على الاخراج والادوات الحديثة في التصوير لجذب العميل بطريقة سهلة ومختصرة. وينقسم إلى ثلاثة أنواع:</p>
            {{-- <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"> --}}
                الاعلان القصير، بمده زمنية لا تتجاوز أربعين ثانية.
                الفيلم التعريفي للمنشأة ويعتمد على إبراز إمكانات المنشأة و خدماتها، بمده زمنية تتراوح ما بين  ثلاث إلى خمس دقائق.
                الفيلم الوثائقي و يعتمد على رؤية وماضي وحاضر وإنجازات المنشأة، بمده زمنية تتراوح ما بين أربع إلى عشر دقائق.
            </textarea>
        </div>

    </div>
</div>

@push('script')

<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
CKEDITOR.replace( 'summary-ckeditor' );
</script>
<!--
    <script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
-->

@endpush



