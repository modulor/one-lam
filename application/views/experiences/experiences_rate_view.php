<?php
if (isset($is_rated)) :
?>
  <p class="text-center mt-5">
    Thanks! See you next time
  </p>
<?php
else :
?>
  <form action="<?php echo base_url("experiences/view/{$experience_name}/{$day}") ?>" method="post">
    <div class="mt-5 text-center">
      <p class="m-0">Rate your experience. Was it winner worthy?</p>
      <div class="my-2">
        <i name="star" id="star_1" onclick="selectStar(1);" class="fa-regular fa-star"></i>
        <i name="star" id="star_2" onclick="selectStar(2);" class="fa-regular fa-star"></i>
        <i name="star" id="star_3" onclick="selectStar(3);" class="fa-regular fa-star"></i>
        <i name="star" id="star_4" onclick="selectStar(4);" class="fa-regular fa-star"></i>
        <i name="star" id="star_5" onclick="selectStar(5);" class="fa-regular fa-star"></i>
        <input type="hidden" name="total_stars" id="total_stars" value="0">
      </div>
      <div class="mb-2">
        <textarea class="form-control" rows="3" name="comments" placeholder="Leave us your comments..."></textarea>
      </div>
      <div class="d-grid gap-2">
        <input type="hidden" name="experience_name" value="<?php echo $experience_name ?>">
        <input type="hidden" name="day" value="<?php echo $day ?>">
        <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('id') ?>">
        <button id="btn-submit" disabled class="btn btn-warning" type="submit">Rate experience</button>
      </div>
    </div>
  </form>
<?php
endif;
?>