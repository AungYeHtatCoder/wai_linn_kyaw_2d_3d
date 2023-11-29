@extends('user_layouts.master')

@section('style')

@endsection

@section('content')
@include('user_layouts.navbar')

 <!-- content -->
 <div class="container-fluid py-5 my-5">
    <!-- Top Up and Withdraw action section  -->
    <div class="mt-4">
      <div>
        <h5>K-pay ဖြင့်ငွေအသွင်း၊ အထုတ် ပြုလုပ်ပေးမည့်ဖုန်းနံပါတ်များ</h5>
        <ul class="list-group">
          <li class="rounded-3 list-group-item my-2 threed_list bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <div class="pt-2">
                <h5>0987654321</h5>
              </div>
              <div class="d-flex">
                <div class="p-2 bg-success rounded-3 d-flex align-content-center mx-1">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/phone.svg"
                        alt="">
                      Phone</span></a>
                </div>
                <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #8f00e1;">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/viber.svg"
                        alt="">
                      Phone</span></a>
                </div>
              </div>
            </div>
          </li>
          <li class="rounded-3 list-group-item my-2 threed_list bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <div class="pt-2">
                <h5>0987654321</h5>
              </div>
              <div class="d-flex">
                <div class="p-2 bg-success rounded-3 d-flex align-content-center mx-1">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/phone.svg"
                        alt="">
                      Phone</span></a>
                </div>
                <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #8f00e1;">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/viber.svg"
                        alt="">
                      Phone</span></a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="mt-5">
        <h5>Wave-pay ဖြင့်ငွေအသွင်း၊ အထုတ် ပြုလုပ်ပေးမည့်ဖုန်းနံပါတ်များ</h5>
        <ul class="list-group">
          <li class="rounded-3 list-group-item my-2 threed_list bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <div class="pt-2">
                <h5>0987654321</h5>
              </div>
              <div class="d-flex">
                <div class="p-2 bg-success rounded-3 d-flex align-content-center mx-1">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/phone.svg"
                        alt="">
                      Phone</span></a>
                </div>
                <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #8f00e1;">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/viber.svg"
                        alt="">
                      Viber</span></a>
                </div>
              </div>
            </div>
          </li>
          <li class="rounded-3 list-group-item my-2 threed_list bg-transparent">
            <div class="d-flex justify-content-between align-items-center">
              <div class="pt-2">
                <h5>0987654321</h5>
              </div>
              <div class="d-flex">
                <div class="p-2 bg-success rounded-3 d-flex align-content-center mx-1">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/phone.svg"
                        alt="">
                      Phone</span></a>
                </div>
                <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #8f00e1;">
                  <a href="tel:0987654321" class="text-decoration-none"><span><img src="../assets/img/viber.svg"
                        alt="">
                      Viber</span></a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="mt-5">
      <h5 class="text-center">အောက်ပါ ချန်နယ်များမှလည်း ဆက်သွယ်နိုင်ပါတယ် ခင်ဗျာ။</h5>
      <ul class="list-group">
        <li class="rounded-3 list-group-item my-2 border-0 bg-transparent">
          <div class="d-flex justify-content-center align-items-center">
            <div class="d-flex">
              <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #2eabe0;">
                <a href="tel:0987654321" class="text-decoration-none pt-1"><span><img src="../assets/img/telegram.svg"
                      alt="">
                    Telegram</span></a>
              </div>
              <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #8f00e1;">
                <a href="tel:0987654321" class="text-decoration-none pt-1"><span><img src="../assets/img/viber.svg"
                      alt="">
                    Viber</span></a>
              </div>
              <div class="p-2 rounded-3 d-flex align-content-center mx-1" style="background: #1877f2;">
                <a href="tel:0987654321" class="text-decoration-none pt-1"><span><img src="../assets/img/facebook.svg"
                      alt="">
                    Facebook</span></a>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- content -->

@include('user_layouts.footer')
@endsection

@section('script')

@endsection

