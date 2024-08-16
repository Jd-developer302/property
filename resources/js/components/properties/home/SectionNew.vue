<template>
      <section>
    <div class="container-xxl">
      <div class="row">
        <div class="col">
          <div class="sec-heading mx-auto">
            <h1>NEW LAUNCH PROJECTS</h1>
            <p>Upcoming & Recent Launches by Reputed Developers</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="image-container">
            <div class="image-group">
              <div class="image-wrapper">
                <img :src="image1" alt="Image 1" class="image">
                <div class="overlay">
                  <p class="overlay-text">Golf Point Emaar South</p>
                  <p class="overlay-text1">Madinat Al Mataar</p>
                  <a href="#" class="overlay-button">VIEW DETAILS</a>
                </div>
              </div>
              <div class="image-wrapper">
                <img :src="image2" alt="Image 2" class="image">
                <div class="overlay">
                  <p class="overlay-text">Dubai Harbour Residences</p>
                  <p class="overlay-text1">Marsa Dubai</p>
                  <a href="#" class="overlay-button">VIEW DETAILS</a>
                </div>
              </div>
              <div class="image-wrapper">
                <img :src="image3" alt="Image 3" class="image">
                <div class="overlay">
                  <p class="overlay-text">Binghatti Valley</p>
                  <p class="overlay-text1">Al Jadaf</p>
                  <a href="#" class="overlay-button">VIEW DETAILS</a>
                </div>
              </div>
              <div class="image-wrapper">
                <img :src="image4" alt="Image 4" class="image">
                <div class="overlay">
                  <p class="overlay-text">Cove Edition by IMTIAZ</p>
                  <p class="overlay-text1">Wadi Al Safa 5</p>
                  <a href="#" class="overlay-button">VIEW DETAILS</a>
                </div>
              </div>
            </div>
      
            <div class="extra-images">
              <img :src="extraImage1" alt="Extra Image 1" class="extra-image">
              <img :src="extraImage2" alt="Extra Image 2" class="extra-image">
            </div>
          </div>
          <div class="btn-container">
            <div class="btn btn-primary">
              <a href="#">VIEW MORE</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>
</template>
<script>
  import { ref } from 'vue';
  import extraImage1Path from '@/assets/img/1.jpg';
  import extraImage2Path from '@/assets/img/6.jpg';
  import image1Path from '@/assets/img/2.jpg';
  import image2Path from '@/assets/img/5.jpg';
  import image3Path from '@/assets/img/3.jpg';
  import image4Path from '@/assets/img/4.jpg';

  export default {
    name: 'SectionNew',
    setup() {
      const extraImage1 = ref(extraImage1Path);
      const extraImage2 = ref(extraImage2Path);
      const image1 = ref(image1Path);
      const image2 = ref(image2Path);
      const image3 = ref(image3Path);
      const image4 = ref(image4Path);
      return {
        extraImage1,
        extraImage2,
        image1,
        image2,
        image3,
        image4
      };
    },
  };
</script>
<style scoped>
  body {
    background: #fff;
    font-family: Montserrat, sans-serif;
    margin: 0;
    font-size: 14px;
    overflow-x: hidden;
    color: #404244;
    font-weight: 400;
    line-height: 1.8;
  }

  a {
    transition: .3s all ease;
  }

  a,
  a:hover {
    text-decoration: none !important;
  }

  /* Sidebar styles */
  aside,
  main {
    height: 100vh;
    min-height: 580px;
  }

  aside {
    width: 300px;
    right: 0;
    top: 5px;
    z-index: 1001;
    position: fixed;
    transform: translateX(100%);
    background-color: #fff;
    border-left: 3px solid #ff7315;
    border-top: 3px solid #ff7315;
    transition: 1s transform cubic-bezier(0.23, 1, 0.32, 1);
  }

  aside.open {
    transform: translateX(0%);
  }

  aside .toggle {
    padding-right: 30px;
    padding-top: 20px;
    position: absolute;
    left: 0;
    transform: translateX(-100%);
  }

  aside .side-inner {
    padding: 5px 0;
    height: 100vh;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
  }
  aside .side-inner .nav-menu ul,
  aside .side-inner .nav-menu ul li {
    padding: 0;
    margin: 0px;
    list-style: none;
  }

  aside .side-inner .nav-menu ul li a {
    display: block;
    padding-left: 10px;
    padding-right: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    color: #8b8b8b;
    position: relative;
    transition: .3s padding-left ease;
  }

  .icon_side_menu {
    font-size: 12px;
    color: #ff7315;
  }

  aside .side-inner .nav-menu ul li a:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0px;
    opacity: 0;
    visibility: hidden;
    transition: .3s opacity ease, .3s visibility ease, .3s width ease;
  }

  aside .side-inner .nav-menu ul li a:hover {
    color: #ff7315;
  }

  aside .side-inner .nav-menu ul li a:hover:before {
    width: 4px;
    opacity: 1;
    visibility: visible;
  }

  aside .side-inner .nav-menu ul li.active a {
    background: #fcfcfc;
    color: #000;
  }

  aside .side-inner .nav-menu ul li.active a:before {
    opacity: 1;
    visibility: visible;
    width: 4px;
  }

  /* Topbar styles */
  .topbar {
    padding: 0;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    z-index: 20;

  }

 

  .sec-heading {
    margin-top: 30px;
    margin-bottom: 20px;
  }

  .sec-heading h1 {
    text-transform: uppercase;
    margin-bottom: 2px;
    line-height: 36px;
    font-size: 24px;
    font-weight: 600;
    color: #9C3133;
  }

  .sec-heading p {
    color: #000;
    font-size: 20px;
    font-weight: 500;
  }

  .header .navbar-brand {
    line-height: 55px;
    padding-top: 3px;
    padding-bottom: 2px;
    margin-left: -120px;
  }

  .header .navbar-brand a {
    padding-left: 15px;
    color: #fff;
    font-size: 24px;
  }


  .act-buttons {
    margin-right: -120px;
    margin-top: -5px;
  }

  .act-buttons a.laung {
    width: 38px;
    display: inline-block;
    text-align: center;
    line-height: 1;
    margin-bottom: -10px;
    position: initial;
    height: 35px;
    margin-right: 10px;
  }

  .act-buttons a.laung img {
    width: 20px;
  }

  .act-buttons a.laung span {
    display: inline-block;
    font-size: 8px;
    color: #fff;
    letter-spacing: .5px;
  }

  .image-container {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
  }

  .image-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 600px;
  }



  .image {
    width: 300px;
    height: 150px;
    border-radius: 8px;
    margin-left: -10px;
    border-radius: 25px
  }

  .extra-images {
    position: absolute;
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-top: -30%;
    transform: translateY(-50%);
    max-width: 600px;
    /* Same as .image-group max-width */
  }

  .extra-image {
    width: 300px;
    height: 330px;
    border-radius: 8px;
    
  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -340px;
    margin-top: 30px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -330px;
    margin-top: 30px;
  }
  .image-wrapper {
  position: relative;
}
.overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #fff;
  background: rgba(0, 0, 0, 0.5); 
  width: 100%;
  height: 100%;
  border-radius: 8px; 

}


.overlay-text {
  font-size: 16px;
  font-weight: 400;
  margin-bottom: 0px;
  margin-top: 15px;
}
.overlay-text1{
  font-size: 18px;
  font-weight: 500;
}

.overlay-button {
  padding: 7px 20px;
  background-color: #9C3133; 
  color: #fff; 
  border: none;
  border-radius: 5px;
  text-decoration: none;
  font-size: 10px;
  transition: background-color 0.3s ease;
}
.btn-container {
  text-align: center;
  margin-top: 20px;
}

.btn-container .btn-primary {
  display: inline-block;
  background-color: #9C3133;
  border: #9C3133;
  padding: 10px 30px;
}

.btn-container .btn-primary a {
  color: #fff;
  font-size: 22px;
  text-decoration: none;
  
}


  /* Responsive Styles */
  @media (max-width: 1280px) {
    .header .navbar-brand {
      margin-left: 0px;
    }

    .act-buttons {
      margin-right: 0px;
    }
  }

  @media (max-width: 1200px) {
    .header .navbar-brand {
      margin-left: 0px;
    }

    .act-buttons {
      margin-right: 0px;
    }

    .image-group {
      margin-left: -50px;
      max-width: 500px;
    }
    .extra-image {
    width: 200px;
    height: 330px;
    border-radius: 8px;
    
  }

  .extra-images img:first-of-type {
    position: absolute;
    left: -200px;
  }

  .extra-images img:last-of-type {
    position: absolute;
    right: -200px;
  }
  }

  @media (max-width: 992px) {
    .header .navbar-brand {
      margin-left: -70px;
    }

    .act-buttons {
      margin-right: -40px;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }


  }

  @media (max-width: 768px) {
    .header .navbar-brand {
      margin-left: -60px;
    }

    .act-buttons {
      margin-right: -10px;
    }

    .image-group {
      grid-template-columns: 1fr;
      max-width: 100%;
    }

    .extra-images {
      display: none;
    }

    .image-group {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      max-width: 600px;
    }

    .image {
      width: 300px;
      height: 220px;
      border-radius: 8px;
    }
  }

  @media (max-width: 576px) {
    .header .navbar-brand a {
      display: none;
      margin-right: 0px;
    }

    .act-buttons {
      margin-right: 20px;
      margin-top: 10px;
    }

    aside {
      top: 0px;
    }

    .whatsapp {
      margin-top: -5px;
    }

    .lni-whatsapp::before {
      content: "\f232";
      font-family: 'FontAwesome';
      color: #fff;
      font-size: 24px;
    }

    .sec-heading h1 {
      font-size: 20px;
      font-weight: 600;
    }

    .sec-heading p {
      font-size: 18px;
      font-weight: 400;
    }

    .image-group {
      grid-template-columns: 1fr; /* Single column layout for medium screens */
    max-width: 100%; /* Full width */
      gap: 10px;
      margin-left: 0px;
    }

    .image {
      width: 100%;
      height: auto;
    }
  }
</style>