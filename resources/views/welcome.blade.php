@extends('layouts.master_frontend')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-1.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Welcome</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Welcome to Namnom</h1>
                                <p class="text-light fs-5 mb-4 pb-3">เป็นผู้ผลิตและจัดจำหน่ายเบเกอรี่ รับผลิตขายส่ง เค้ก ขนมปัง พัฟ พาย เบเกอรี่ ขนม คุกกี้</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/carousel-2.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-8">
                                <p class="text-primary text-uppercase fw-bold mb-2">// Welcome</p>
                                <h1 class="display-1 text-light mb-4 animated slideInDown">Welcome to Namnom</h1>
                                <p class="text-light fs-5 mb-4 pb-3">เป็นผู้ผลิตและจัดจำหน่ายเบเกอรี่ รับผลิตขายส่ง เค้ก ขนมปัง พัฟ พาย เบเกอรี่ ขนม คุกกี้</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row img-twice position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/about-1.jpg') }}" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/about-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <p class="text-primary text-uppercase mb-2">// เกี่ยวกับเรา</p>
                        <h1 class="display-6 mb-4">Namnom</h1>
                        <p>เป็นผู้ผลิตและจัดจำหน่ายเบเกอรี่ รับผลิตขายส่ง เค้ก ขนมปัง พัฟ พาย เบเกอรี่ ขนม คุกกี้ โดยมีจุดมุ่งหมายในการบริการลูกค้าทางด้านเบเกอรี่ ความพิเศษของบริษัทฯ คือการตอบโจทย์ความต้องการของลูกค้าด้วยสินค้าที่มีคุณภาพทั้งในด้านรสชาติและรูปลักษณ์ ทางบริษัทฯ มีสินค้าให้เลือกมากมาย ไม่ว่าจะเป็นในรูปแบบขนม เค้ก ชีสเค้ก ขนมปัง ครัวซอง พาย เบเกอรี่ แช่แข็ง ขายส่ง ขายปลีก และขนมอื่นๆ</p>
                        <p>เราคงคอนเซ็ปต์รสชาติอร่อย สะอาด ใส่ใจ และพิถีพิถัน ลูกค้าทานแล้วติดใจ รวมทั้งสะดวกต่อการสั่งและจัดส่งสำหรับร้านค้า เพราะสั่งง่าย ตอบไว เพื่อตอบสนองความต้องการของทั้งผู้บริโภค และความสะดวกสบาย และความพึงพอใจของคู่ค้าในทุกด้านมากที่สุด</p>
                        <div class="row g-2 mb-4">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>สินค้าคุณภาพ
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>ผลิตภัณฑ์ที่กำหนดเอง
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>สั่งซื้อออนไลน์
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>ส่งถึงบ้าน
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="">อ่านเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


@endsection
