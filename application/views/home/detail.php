<br>
<br> <br>
<div class="container">
	<div class="row">
		<div class="col-lg-8 mb-5 mb-lg-0">
			<div class="blog_left_sidebar">
				<article class="blog_item">
					<div class="blog_item_img">
						<img class="card-img rounded-0" src="<?=  base_url('assets/upload/konten/'.$konten->foto)?>"
							alt="">
						</a>
					</div>

					<div class="blog_details">
						
							<h2><?= $konten->judul; ?></h2>
                            <h6 class="harga_detail"><?= $konten->harga; ?></h6>
						<p><?= nl2br($konten->keterangan); ?></p>

						<ul class="blog-info-link">
							<li><a><i class="far fa-user"></i><?= $konten->creator_name; ?></a></li>
							<li><a><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-tag" viewBox="0 0 16 16">
										<path
											d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0" />
										<path
											d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1m0 5.586 7 7L13.586 9l-7-7H2z" />
									</svg><?= $konten->nama_kategori; ?></a>
							</li>
							<li><a>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										class="bi bi-calendar" viewBox="0 0 16 16">
										<path
											d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
									</svg> <?= $konten->tanggal; ?></a>
							</li>

						</ul>
					</div>
				</article>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="blog_right_sidebar">

				<aside class="single_sidebar_widget post_category_widget">
					<h4 class="widget_title">Category</h4>
					<ul class="list cat-list">
						<?php foreach($kategori as $kate){ ?>
						<li>
							<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>" class="d-flex">
								<p> <?= $kate['nama_kategori'] ?> </p>
								<!-- <p>(37)</p> -->
							</a>
						</li>
						<?php } ?>
					</ul>
				</aside>
			</div>
		</div>
	</div>
</div>
