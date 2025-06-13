<?php $__env->startSection('content'); ?>
    <div class="landing-page" style="background-color: #f8f9fa;">
        <section class="hero text-center py-5 bg-light">
            <div class="container">
                <h1 class="display-4 mb-3">Selamat Datang di <span class="text-primary">LOKAWI</span></h1>
                <p class="lead mb-4">Temukan dan pesan destinasi wisata terbaik di seluruh Indonesia dengan mudah dan cepat.</p>
                <a href="<?php echo e(url('/lokawi')); ?>" class="btn btn-primary btn-lg explore-btn">Jelajahi Sekarang</a>
                <style>
                    .explore-btn {
                        transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
                    }
                    .explore-btn:hover {
                        background: #0b5ed7;
                        transform: translateY(-3px) scale(1.04);
                        box-shadow: 0 4px 16px rgba(13,110,253,0.15);
                    }

                </style>
            </div>
        </section>

        <section class="features py-5">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm feature-card">
                            <div class="card-body">
                                <i class="bi bi-geo-alt-fill display-4 text-primary mb-3"></i>
                                <h5 class="card-title">Destinasi Lengkap</h5>
                                <p class="card-text">Dari landmark terkenal hingga hidden gems, semua ada di LOKAWI.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm feature-card">
                            <div class="card-body">
                                <i class="bi bi-ticket-perforated-fill display-4 text-primary mb-3"></i>
                                <h5 class="card-title">Booking Mudah</h5>
                                <p class="card-text">Pesan tiket wisata secara online, cepat, dan aman tanpa ribet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm feature-card">
                            <div class="card-body">
                                <i class="bi bi-star-fill display-4 text-primary mb-3"></i>
                                <h5 class="card-title">Ulasan & Tips</h5>
                                <p class="card-text">Baca ulasan, dapatkan tips perjalanan, dan rekomendasi destinasi sesuai minatmu.</p>
                            </div>
                        </div>
                    </div>
                    <style>
                        .feature-card {
                            transition: transform 0.2s, box-shadow 0.2s;
                        }
                        .feature-card:hover {
                            transform: translateY(-8px) scale(1.03);
                            box-shadow: 0 8px 32px rgba(0,0,0,0.15);
                            border-color: #0d6efd;
                        }
                    </style>
                </div>
            </div>
        </section>
    </div>
    <section class="popular-landmarks py-5 bg-white">
        <div class="container">
            <h2 class="text-center mb-4">Top 3 Landmark Ter-Rame</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo e(asset('images/monas-2.jpg')); ?>" class="card-img-top" alt="Monas (Monumen Nasional)">
                        <div class="card-body">
                            <h5 class="card-title">Monas (Monumen Nasional)</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Jakarta</p>
                            <p class="card-text">Ikon ibu kota Indonesia yang selalu ramai dikunjungi wisatawan lokal maupun mancanegara.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo e(asset('images/borobudur.jpg')); ?>" class="card-img-top" alt="Candi Borobudur">
                        <div class="card-body">
                            <h5 class="card-title">Candi Borobudur</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Magelang, Jawa Tengah</p>
                            <p class="card-text">Candi Buddha terbesar di dunia, destinasi favorit wisata sejarah dan religi.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo e(asset('images/kuta.jpg')); ?>" class="card-img-top" alt="Pantai Kuta">
                        <div class="card-body">
                            <h5 class="card-title">Pantai Kuta</h5>
                            <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Bali</p>
                            <p class="card-text">Pantai paling populer di Bali, terkenal dengan sunset dan suasana ramai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .popular-landmarks .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .popular-landmarks .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 16px rgba(0,0,0,0.1);
                border-color: #0d6efd;
            }
        </style>
        <div class="container mt-5">
            <h2 class="text-center mb-4">Top 3 Hidden Gem Wisata di Indonesia</h2>
            <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/derawan.jpg')); ?>" class="card-img-top" alt="Kepulauan Derawan">
                <div class="card-body">
                    <h5 class="card-title">Kepulauan Derawan</h5>
                    <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Kalimantan Timur</p>
                    <p class="card-text">Surga tersembunyi dengan pantai pasir putih, air jernih, dan kehidupan bawah laut yang menakjubkan.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/waerebo.jpg')); ?>" class="card-img-top" alt="Desa Wae Rebo">
                <div class="card-body">
                    <h5 class="card-title">Desa Wae Rebo</h5>
                    <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Flores, Nusa Tenggara Timur</p>
                    <p class="card-text">Desa tradisional di atas pegunungan dengan rumah adat unik dan pemandangan alam yang memukau.</p>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                <img src="<?php echo e(asset('images/nusa-penida.jpg')); ?>" class="card-img-top" alt="Nusa Penida">
                <div class="card-body">
                    <h5 class="card-title">Nusa Penida</h5>
                    <p class="card-text text-muted mb-1"><i class="bi bi-geo-alt"></i> Bali</p>
                    <p class="card-text">Pulau eksotis dengan tebing dramatis, pantai tersembunyi, dan spot snorkeling terbaik.</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        <style>
            .popular-landmarks .card-img-top {
            height: 220px;
            object-fit: cover;
            }
            .popular-landmarks .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .popular-landmarks .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 16px rgba(0,0,0,0.1);
                border-color: #0d6efd;
            }
        </style>
    </section>

    <section class="top-reviews py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Top 3 Ulasan Terbaik & Membantu</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Monas sangat bersih dan terawat. Tips: Datang pagi hari untuk menghindari antrean panjang dan nikmati pemandangan kota dari puncak!"</p>
                            <div class="mb-2">
                                <small class="text-muted">Andi Pratama - Monas, Jakarta</small>
                            </div>
                            <div>
                                <span class="badge bg-success"><i class="bi bi-hand-thumbs-up"></i> 120 Membantu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Borobudur sangat megah! Jangan lupa bawa topi & air minum karena cuaca cukup panas. Guide lokal sangat informatif."</p>
                            <div class="mb-2">
                                <small class="text-muted">Siti Rahmawati - Candi Borobudur</small>
                            </div>
                            <div>
                                <span class="badge bg-success"><i class="bi bi-hand-thumbs-up"></i> 98 Membantu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Pantai Kuta cocok untuk keluarga. Banyak pilihan makanan di sekitar pantai. Sunset di sini benar-benar indah!"</p>
                            <div class="mb-2">
                                <small class="text-muted">Made Arya - Pantai Kuta, Bali</small>
                            </div>
                            <div>
                                <span class="badge bg-success"><i class="bi bi-hand-thumbs-up"></i> 87 Membantu</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .top-reviews .card {
                transition: transform 0.2s, box-shadow 0.2s;
            }
            .top-reviews .card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 16px rgba(0,0,0,0.1);
                border-color: #198754;
            }
        </style>
    </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('template.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\wisata-app\resources\views/home.blade.php ENDPATH**/ ?>