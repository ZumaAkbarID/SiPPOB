<template>
  <div>
    <navbar />
    <div class="container my-5">
      <div class="row">
        <div
          class="col-lg-4 col-md-4 col-sm-6 col-6 mb-5"
          v-for="(teamMember, index) in teamMembers"
          :key="index"
        >
          <div
            class="our-team"
            @mouseover="showSocial(teamMember)"
            @mouseout="hideSocial(teamMember)"
          >
            <div class="pic" @click="openSocialMedia(teamMember)">
              <img
                :src="teamMember.image"
                alt="Team Member"
                class="profile-pic"
              />
              <ul class="social" v-show="teamMember.showSocial">
                <li>
                  <a
                    href="#"
                    class="fab fa-instagram"
                    @click.prevent="openInstagram(teamMember)"
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="fab fa-github"
                    @click.prevent="openGithub(teamMember)"
                  ></a>
                </li>
                <li>
                  <a
                    href="#"
                    class="fab fa-linkedin"
                    @click.prevent="openLinkedIn(teamMember)"
                  ></a>
                </li>
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
    <layout-footer />
  </div>
</template>

<script>
export default {
  data() {
    return {
      teamMembers: [
        {
          name: "Dennita Noor Febianty",
          role: "Back End",
          image: "/assets/Foto/Nita.png",
          instagram: "https://www.instagram.com/its_ntakk/",
          github: "https://github.com/",
          linkedin:
            "https://id.linkedin.com/in/dennita-noor-febianty-3b6a1228a",
          showSocial: false,
        },
        {
          name: "Rahmat Wahyuma Akbar",
          role: "Back End",
          image: "/assets/Foto/Zuma.jpeg",
          instagram: "https://www.instagram.com/zuma.akbar",
          github: "https://github.com/ZumaAkbarID",
          linkedin: "https://id.linkedin.com/in/rahmat-wahyuma-akbar",
          showSocial: false,
        },
        {
          name: "Rachmasari Annisa Rida",
          role: "Fullstack",
          image: "/assets/Foto/Nisaa.JPG",
          instagram: "https://www.instagram.com/rachmasari_a.r",
          github: "https://github.com/RachmasariAR",
          linkedin: "https://www.linkedin.com/in/rachmasari-annisa-rida/",
          showSocial: false,
        },
        {
          name: "Dico Fathatul Rizki",
          role: "Front End",
          image: "/assets/Foto/Dico.JPG",
          instagram: "https://www.instagram.com/",
          github: "https://github.com/",
          linkedin: "https://id.linkedin.com/",
          showSocial: false,
        },
        {
          name: "Muhamad Syamsul Hidayat",
          role: "Front End",
          image: "/assets/Foto/Syamsul.JPG",
          instagram: "https://www.instagram.com/",
          github: "https://github.com/",
          linkedin: "https://id.linkedin.com/",
          showSocial: false,
        },
        {
          name: "Praditus Egi Danuarta",
          role: "Front End",
          image: "/assets/Foto/Egi.JPG",
          instagram: "https://www.instagram.com/",
          github: "https://github.com/",
          linkedin: "https://id.linkedin.com/",
          showSocial: false,
        },
      ],
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
      window.open(teamMember.instagram, "_blank");
    },
    openGithub(teamMember) {
      window.open(teamMember.github, "_blank");
    },
    openLinkedIn(teamMember) {
      window.open(teamMember.linkedin, "_blank");
    },
    openSocialMedia(teamMember) {
      window.open(
        teamMember.instagram || teamMember.github || teamMember.linkedin,
        "_blank"
      );
    },
  },
};
</script>

<style scoped>
@import url("/assets/tim.css");

.our-team {
  text-align: center;
  margin-bottom: 80px;
  z-index: 1;
  position: relative;
}

/* .row {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
  grid-gap: 40px;
  justify-content: center;
  align-items: center;
} */

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
  width: 50px;
  height: 50px;
  line-height: 30px;
  border-radius: 50%;
  border: 1px solid #fff;
  font-size: 25px;
  padding-top: 10px;
  color: #fff;
  margin-right: 10px;
  transition: all 0.5s ease 0s;
}
@media only screen and (max-width: 425px) {
  .our-team .social li a {
    width: 30px;
    height: 30px;
    font-size: 18px;
    padding-top: 0px;
  }
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
  bottom: -100px;
  left: 0;
  z-index: -1;
  transition: all 0.5s ease 0s;
}
.our-team:hover .team-content {
  border: 2px dotted #de1ede;
}
.our-team .team-info {
  width: 100%;
  color: #464646;
  position: absolute;
  bottom: 20px;
  left: 0;
}
.our-team .title {
  font-size: 20px;
  font-weight: 600;
  color: #878787;
  /* margin: 0 0 25px 0; */
  transition: all 0.5s ease 0s;
}

.our-team:hover .title {
  color: #ffffff;
}
.our-team .post {
  display: block;
  font-size: 16px;
  margin: 0 0 10px 0;
  color: #464646;
}
@media only screen and (max-width: 620px) {
  .our-team .title {
    font-size: 16px;
  }
  .our-team .post {
    margin: 0 0 20px 0;
    font-size: 12px;
  }
}
@media only screen and (max-width: 320px) {
  .our-team .title {
    font-size: 13px;
  }
  .our-team .post {
    margin: 0 0 10px 0;
    font-size: 10px;
  }
}
.our-team:hover .post {
  color: #cccccc;
}
.container {
  width: 100%; /* Adjust the width as needed */
  max-width: 1200px; /* Set a maximum width if desired */
  margin: 0 auto; /* Center the container horizontally */
  padding: 1px 0px; /* Add padding to the sides if needed */
}
</style>
