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
                  <h5 class="card-title">About us</h5>
                      <input type="text" v-model="inputValue" @input="handleInput" placeholder="Type something...">

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
      inputValue: "",
    };
  },
  methods: {
    handleInput() {
      axios
        .post("/api/store", { inputValue: this.inputValue })
        .then((response) => {
          console.log(response.data.message);
        })
        .catch((error) => {
          console.log(this.inputValue,'this.inputValue');
          console.error("Error saving data:", error);
        });
    },
    fetchData() {
      axios
        .get("/api/fetch-data")
        .then((response) => {
          this.inputValue = response.data.data.input_value;
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    },
  },
};
</script>