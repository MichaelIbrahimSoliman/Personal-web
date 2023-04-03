<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="css/CaontactUs.css">


  <title>M I| Caontact Us</title>

</head>

<body>

  <?php require "includes/header.php"; ?>



  <section class="contact" id="contact" style="margin-bottom: 500px;">
    <h3 class="title" data-i18n="contact">Contact Us</h3>
    <p class="sub-title"   data-i18n="GetinTouch" >Get in Touch</p>

    <div class="container">
      <div class="text">
        <h2 data-i18n="GetinTouch" style="font-size:25px">Get in Touch</h2>
        <p>
          demo
        </p>
     

        <p style="clear:both"></p>

        <div class="item" style="width: 100%;">
          <div class="icon"></div>
          <div class="description">
            <p ><strong data-i18n="Adress">Adress</strong> <small > :- </small>  <small>  </small></p>
          </div>
        </div>

        <p style="clear:both"></p>

        <div class="item" style="width: 100%;">
          <div class="icon"></div>
          <div class="description">
            <p ><strong data-i18n="Phone">Phone</strong> <small>:- </small> <small data-i18n="NoPhone">  01275535210 </small> </p>
          </div>
        </div>

        <p style="clear:both"></p>

        <div class="item" style="width: 100%;">
          <div class="icon"></div>
          <div class="description">
            <p ><strong data-i18n="Email" >Email</strong> <small>:- </small> michaelibrahim383@gmail.com</small> </p>
          </div>
        </div>
        <p style="clear:both"></p>

      </div>
    </div>

    <div class="form-parent">
      <input type="text" name="" placeholder="Your Name Please" class="w-100" />
      <input type="tel" name="phone" placeholder="Your Number Please" pattern="[02]{01}-[0]{1}-[0-9]{3}" class="w-100" />
      <input type="text" name="" placeholder="Adress(Optional)" class="w-100">

      <label for="Choose" data-i18n="choosesservies">Pleases Choose Type of the servies:</label>
      <select name="Chooses" id="Chooses">
        <option value="Mechanical Works" data-i18n="MechanicalWorks">Mechanical Works</option>
        <option value="Electrical Works" data-i18n="submElectricalWorksit">Electrical Works</option>
        <option value="Interior Decoration work" data-i18n="InteriorDecorationwork">Interior Decoration work</option>
        <option value="Maintenance and Operation" data-i18n="MaintenanceandOperation">Maintenance and Operation</option>
      </select>
      <br><br>

      <textarea placeholder="Please, any servies not found in Choose put It's name or  It's description here..." class="w-100">
      </textarea>
      <button type="submit" data-i18n="submit">Submit</button>
    </div>
  </section>


  
  <script src="script.js" type="module"></script>
  <?php require "includes/footer.php"; ?>
</body>

</html>