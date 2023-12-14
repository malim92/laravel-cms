<template>
    <div>
        <form @submit.prevent="login">
            <label>Email:</label>
            <input v-model="email" type="email" required />

            <label>Pass:</label>
            <input v-model="password" type="password" required />

            <button type="submit">Login </button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            email: "",
            password: "",
        };
    },
    methods: {
        login() {
            // Implement the logic to make a login API request
            // using the email and password from the data.
            // You can use Axios or another HTTP library for this.
        },
    },
};
</script>
