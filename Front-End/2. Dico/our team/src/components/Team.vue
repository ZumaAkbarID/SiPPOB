<template>
   <div class="container">
    <div class="row">
      <div class="col-md-4" v-for="(teamMember, index) in teamMembers" :key="index">
          <div class="our-team" @mouseover="showSocial(teamMember)" @mouseout="hideSocial(teamMember)">
            <div class="pic" @click="openSocialMedia(teamMember)">
              <img :src="teamMember.image" alt="Team Member" class="profile-pic">
              <ul class="social" v-show="teamMember.showSocial">
                <li><a href="#" class="fab fa-instagram" @click.prevent="openInstagram(teamMember)"></a></li>
                <li><a href="#" class="fab fa-github" @click.prevent="openGithub(teamMember)"></a></li>
                <li><a href="#" class="fab fa-linkedin" @click.prevent="openLinkedIn(teamMember)"></a></li>
              </ul>
            </div>
            <div class="team-content">
              <div class="team-info">
                <h3 class="title">{{ teamMember.name }}</h3>
                <span class="post">{{ teamMember.role }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        teamMembers: [
          {
            name: 'Dennita Noor Febyanti',
            role: 'Web Developer',
            image: 'src/assets/Foto/Nita.png',
            instagram: 'https://www.instagram.com/its_ntakk/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/in/dennita-noor-febianty-3b6a1228a',
            showSocial: false
          },
          {
            name: 'Rahmat Wahyuma Akbar',
            role: 'Tuhan',
            image: 'src/assets/Foto/Zuma.jpeg',
            instagram: 'https://www.instagram.com/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/',
            showSocial: false
          },
          {
            name: 'Rachmasari Annisa Rida',
            role: 'Web Developer',
            image: 'src/assets/Foto/Nisa.jpeg',
            instagram: 'https://www.instagram.com/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/',
            showSocial: false
          },
          {
            name: 'Dico Fathatul Rizki',
            role: 'Front End',
            image: 'src/assets/Foto/Dico.JPG',
            instagram: 'https://www.instagram.com/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/',
            showSocial: false
          },
          {
            name: 'Muhamad Syamsul Hidayat',
            role: 'Front End',
            image: 'src/assets/Foto/Syamsul.JPG',
            instagram: 'https://www.instagram.com/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/',
            showSocial: false
          },
          {
            name: 'Praditus Egi Danuarta',
            role: 'Front End',
            image: 'src/assets/Foto/Egi.JPG',
            instagram: 'https://www.instagram.com/',
            github: 'https://github.com/',
            linkedin: 'https://id.linkedin.com/',
            showSocial: false
          }
        ]
      };
    },
    methods: {
      showSocial(teamMember) {
        teamMember.showSocial = true;
      },
      hideSocial(teamMember) {
        teamMember.showSocial = false;
      },
      openInstagram(teamMember) {
        window.open(teamMember.instagram, '_blank');
      },
      openGithub(teamMember) {
        window.open(teamMember.github, '_blank');
      },
      openLinkedIn(teamMember) {
        window.open(teamMember.linkedin, '_blank');
      },
      openSocialMedia(teamMember) {
        window.open(teamMember.instagram || teamMember.github || teamMember.linkedin, '_blank');
      }
    }
  };
  </script>
  
  <style scoped>
  .our-team {
    text-align: center;
    margin-bottom: 80px;
    z-index: 1;
    position: relative;
  }

  .row {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    grid-gap: 40px;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
  }
  .profile-pic {
  width: 100%;
  max-width: 100%;
  height: auto;
}
  .our-team .pic {
    border-radius: 50%;
    overflow: hidden;
    position: relative;
  }
  .our-team .pic:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    transition: all 0.5s ease 0s;
  }
  .our-team:hover .pic:after {
    opacity: 1;
  }
  .our-team .pic img {
    width: 100%;
    height: auto;
  }
  .our-team .social {
    width: 100%;
    padding: 0;
    margin: 0;
    list-style: none;
    opacity: 0;
    position: absolute;
    top: 45%;
    left: 5px;
    z-index: 1;
    transition: all 0.5s ease 0s;
  }
  .our-team:hover .social {
    opacity: 1;
  }
  .our-team .social li {
    display: inline-block;
  }
  .our-team .social li a {
    display: block;
    width: 20px;
    height: 20px;
    line-height: 30px;
    border-radius: 50%;
    border: 1px solid #fff;
    font-size: 15px;
    color: #fff;
    margin-right: 10px;
    transition: all 0.5s ease 0s;
  }
  .our-team .social li a:hover {
    background: #fff;
    color: #000;
  }
  .our-team .team-content {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 2px dotted #ddd;
    position: absolute;
    bottom: -60px;
    left: 0;
    z-index: -1;
    transition: all 0.5s ease 0s;
  }
  .our-team:hover .team-content {
    border: 2px dotted #DE1EDE;
  }
  .our-team .team-info {
    width: 100%;
    color: #464646;
    position: absolute;
    bottom: 20px;
    left: 0;
  }
  .our-team .title {
    font-size: 11px;
    font-weight: 600;
    color: #878787;
    margin: 0 0 5px 0;
    transition: all 0.5s ease 0s;
  }
  .our-team:hover .title {
    color: #FFFFFF;
  }
  .our-team .post {
    display: block;
    font-size: 10px;
    color: #464646;
  }

  .our-team:hover .post {
    color: #CCCCCC;
  }
  .container {
    width: 100%; /* Adjust the width as needed */
    max-width: 1200px; /* Set a maximum width if desired */
    margin: 0 auto; /* Center the container horizontally */
    padding: 1px 0px; /* Add padding to the sides if needed */
  }

  

  </style>
  