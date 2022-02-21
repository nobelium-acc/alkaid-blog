<?php

use App\Helpers\Text;

?>
<div class="col-lg-6" style="display: flex">
								<div class="blog-post" style="display: flex; flex-direction: column;">
									<div class="blog-thumb">
										<img src="/storage/post_images/<?= $post->getMedias()[0]?>" alt="Image d'article">
									</div>
									<div class="down-content" style="flex-grow: 1">
										<a href="<?= $router->url('category', ['id'=> $showCategory->getID(), 'slug' => $showCategory->getSlug()]) ?>"><span><?= $showCategory->getName() ?></span></a>
										<a href="<?= $router->url('post', ['id'=> $post->getID(), 'slug'=>$post->getSlug()]) ?>"><h4 class="post-title"><?= $post->getTitle() ?></h4></a>
										<ul class="post-info">
											<li><a href="#"><?= $author ?></a></li>
											<li><a href="#"><?= $post->getCreatedAt()->format('d F Y') ?></a></li>
											<?php if($countComments > 0): ?>
												<li><a href="#"><?= $countComments ?> <?= ($countComments > 1) ? "Commentaires" : "Commentaire" ?></a></li>
											<?php endif ?>
											<!-- <li><a href="#">12 Comments</a></li> -->
										</ul>
										<p><?= Text::excerpt(nl2br(e($post->getContent())), 170) ?></p>
										<!-- <div class="post-options">
											<div class="row">
												<div class="col-lg-12">
													<ul class="post-tags">
													<li><i class="fa fa-tags"></i></li>
													<li><a href="#">Best Templates</a>,</li>
													<li><a href="#">TemplateMo</a></li>
													</ul>
												</div>
											</div>
										</div> -->
									</div>
								</div>
							</div>