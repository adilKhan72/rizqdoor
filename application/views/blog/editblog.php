<?php require("header.php");?><!--php required header-->
<?php require("sidebarnav.php");?><!--php required header-->
 <main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
         
            
          <div class="container" >
  <div class="row">
      <div class="col-lg" style="padding:30px 10px;">
          
    <?php echo form_open('blog/editblogsubmit'); ?>
              
               <input type="hidden" name="id" value="<?php echo $blog->id;?>">
              
  <div class="form-group">
    <label for="exampleInputEmail1" style="padding:10px 0px 0px 0px;">Blog Title
    : 
    
    </label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $blog->title;?>" name="title" placeholder="title" required="">
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="padding:10px 0px 0px 0px;">Blog Type</label>
  <?php
  $options = array(
        'Finding-a-Job'         => 'Finding a Job',
        'Career-Planning'         => 'Career Planning',
        'Market-Insights'           => 'Market Insights',
        'Our-News'           => 'Our News',
        'Employer-Corner'           => 'Employer Corner',
);

$type = $blog->blogtype;

echo form_dropdown('blogtype', $options,$type,['class' => 'form-control']);
  ?> </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="padding:10px 0px 0px 0px;">Blog Paragraph</label>
    <textarea required="" name="paragraph"  class="form-control"  id="exampleFormControlTextarea1" rows="13"><?php echo $blog->paragraph;?></textarea>
  </div>
  <input type="submit" class="btn btn-primary " name="submit" value="submit">
</form>
      </div>
          </div>
          </div>
        </main>

      </div>
    </div>


<?php require("footer.php");?><!--php required footer-->