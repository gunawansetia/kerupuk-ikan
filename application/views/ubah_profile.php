<div class="container-fluid"></div>
<div class="row text-justify">
<div class="container py-lg-5 mb-5">


    <?php foreach ($original as $brg):?>


      <div class="card border-dark mb-3" style="max-width: 18rem;">
      <div class="card-header text-center">Profile</div>
      <div class="card-body text-dark">
        <h5 class="card-title mb-1">Nama: <?php echo $brg->nama?></h5>
        <h5 class="card-title mb-1">Username: <?php echo $brg->username?></h5>
      </div>
    </div>
                           
            </div>
        </div>
      </div>

 

         
    <?php endforeach;?>
