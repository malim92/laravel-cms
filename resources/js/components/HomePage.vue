<template>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home page</h1>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Hero Title</h5>
                  <div>
                    <input
                      type="text"
                      v-model="heroTitle"
                      @input="handleInput"
                      placeholder="Type something..."
                    />
                    <input
                      type="text"
                      v-model="heroDescription"
                      placeholder="Type something else..."
                    />

                    <button @click="submitForm">Submit</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Background</h5>
                  <br />
                  <input type="file" @change="handleFileUpload" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Home Page</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      heroTitle: "",
      heroDescription: "",
    };
  },
  methods: {
    handleInput() {
      console.log("user typing...");
    },
    submitForm() {
      axios
        .post("/api/store", {
          heroTitle: this.heroTitle,
          heroDescription: this.heroDescription,
        })
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
    fetchData() {
      axios
        .get("/api/fetch-data")
        .then((response) => {
          console.log(" fetching response:", response);
          this.heroTitle = response.data.data.input_value;
          this.heroDescription = response.data.data.input_value;
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    },
  },
};
</script>