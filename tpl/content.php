<!--==================== CONTENT TPL ====================-->

        <?php
            $posts = get_posts_all();//GET POSTS
            foreach ($posts as $post): ?>
                
                <?php $category_name = get_category_by_id($post["category_id"]) ?>
                <?php $author_name = get_author_by_id($post["author_id"]) ?>
                <?php $image = get_image_by_id($post["image_id"]) ?>

                <div class="pre_post">
                            <!--==================== IMAGE DB ====================-->
                    <?php echo $image; ?>
                    <div class="under_image">
                            <!--==================== BUTTON ====================-->
                        <button class="btn" data-toggle="modal" data-target=".bs-example-modal-lg">Посмотреть</button>
                    <h3 class="zero_margin"> 
                            <!--==================== TITLE DB ====================-->
                        <?php echo $post["title"]; ?> 
                    </h3>
                            <!--==================== ORIGINAL LINK ====================-->
                    <a href="http://expert.ru/2018/01/26/elektromobili-zastavlyayut-zhech-bolshe-uglya-i-gaza/" target="_blank" class="original">expert.ru</a>
                    <p class="zero_margin"> 
                            <!--==================== TAG DB ====================-->
                        <?php echo $category_name; ?> 
                    </p>
                            <!--==================== AUTHOR DB ====================-->
                    <p class="zero_margin"> Автор: 
                        <?php echo $author_name; ?> 
                    </p>
                    </div>
                </div>

<!--==================== CONTENT MODAL JS ====================-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
                            <!--==================== TITLE DB ====================-->
        <h4 class="modal-title" id="myModalLabel"><?php echo $post["title"]; ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
                            <!--==================== TEXT DB ====================-->
        <?php echo $post["text"]; ?>
                            <!--==================== IMAGE DB ====================-->
            <?php 
                    echo $image;
            ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>

                <?php endforeach; ?>