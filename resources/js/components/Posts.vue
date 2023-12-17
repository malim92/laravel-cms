<template>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="card">
          <div class="card-body">
            <h2 class="text-center card-title">All Posts</h2>
            <table>
              <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
                <th>Company</th>
                <th>Contact</th>
                <th>Contact</th>
              </tr>
              <tr v-for="post in posts" :key="post.id">
                  <td>
                    <p class="text-center">{{ post.id }}</p>
                  </td>
                  <td>
                    <p class="text-center">{{ post.title }}</p>
                  </td>
                  <td>
                    <p class="text-center">{{ post.content }}</p>
                  </td>
                  <td>
                    <p class="text-center">{{ post.type }}</p>
                  </td>
                  <td>
                    <p class="text-center">{{ post.status }}</p>
                  </td>
                  <td>
                    <p class="text-center">{{ post.image }}</p>
                  </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Posts</a></li>
          <li class="breadcrumb-item active">Home Page</li>
        </ol>
        <div class="col">
          <hr />
          <h1 class="m-0 padding">Posts page</h1>
          <br />
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hero Title</h5>
              <table>
                <tr>
                  <td>
                    <p class="text-center">Post Title</p>
                    <input
                      v-model="postTitle"
                      type="text"
                      placeholder="Title"
                    />
                  </td>
                  <td>
                    <p class="text-center">Post Type</p>
                    <input v-model="postType" type="text" placeholder="Type" />
                  </td>
                  <td>
                    <p class="text-center">Content</p>
                    <input
                      v-model="postContent"
                      type="text"
                      placeholder="Content"
                    />
                  </td>
                  <td>
                    <p class="text-center">Status</p>

                    <label class="toggle-switch">
                      <input type="checkbox" v-model="postStatus" />
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td>
                    <p class="text-center">Upload Image</p>
                    <input
                      type="file"
                      ref="fileInput"
                      @change="handleFileChange"
                    />
                  </td>
                </tr>
              </table>
              <button @click="submitForm">Submit</button>
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
      posts: [],
      postTitle: "",
      postType: "",
      postContent: "",
      postStatus: "",
      selectedFile: null,
    };
  },
  mounted() {
    this.fetchPosts();
  },
  methods: {
    handleInput() {
      console.log("user typing...");
    },
    handleFileChange(event) {
      this.selectedFile = event.target.files[0];
    },
    submitForm() {
      let postFormData = new FormData();
      postFormData.append("postTitle", this.postTitle);
      postFormData.append("postType", this.postType);
      postFormData.append("postContent", this.postContent);
      postFormData.append("postStatus", this.postStatus == true ? 1 : 0);
      postFormData.append("postFile", this.selectedFile);
      axios;
      axios
        .post("/api/post", postFormData)
        .then((response) => {
          console.log(response.data.message);
        })
        .catch((error) => {
          if (error.response) {
            console.error(
              "Server responded with an error status:",
              error.response.status
            );
            console.log("Errors from the server:", error.response.data.errors);
          } else if (error.request) {
            console.error("No response received from the server");
          } else {
            console.error("Error setting up the request:", error.message);
          }
        });
    },
    fetchPosts() {
      axios
        .get("/api/posts")
        .then((response) => {
          console.log(" fetching response:", response);
          //   this.heroTitle = response.data.data.input_value;
          //   this.heroDescription = response.data.data.input_value;
          this.posts = response.data.posts;
        })
        .catch((error) => {
          if (error.response) {
            console.error(
              "Server responded with an error status:",
              error.response.status
            );
            console.log("Errors from the server:", error.response.data.errors);
          } else if (error.request) {
            console.error("No response received from the server");
          } else {
            console.error("Error setting up the request:", error.message);
          }
        });
    },
  },
};
</script>

<style src="../../resources/css/posts.css" />
