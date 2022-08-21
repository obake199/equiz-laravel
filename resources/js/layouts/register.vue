<template>
    <v-app :class="{ 'pa-3': $vuetify.breakpoint.smAndUp }">
        <v-container>
            <v-layout wrap>
                <v-flex sm12 md6 offset-md3>
                    <v-expand-transition>
                        <v-card elevation="4" light>
                            <v-card-title>
                                <v-layout align-center justify-space-between>
                                <h3 class="headline">
                                    {{'EQUIZ Register'}}
                                </h3>
                                </v-layout>
                            </v-card-title>

                            <v-divider></v-divider>
                            
                            <v-card-text>
                                <v-form ref="form">
                                    <v-text-field
                                        :rules="[rules.required]"
                                        v-model="form.name"
                                        name="name"
                                        label="Name"
                                        id="name"
                                    ></v-text-field>
                                    <v-text-field
                                        :rules="[rules.required, rules.emailRules]"
                                        v-model="form.email"
                                        name="Email"
                                        label="Email"
                                        id="Email"
                                    ></v-text-field>
                                    <v-text-field
                                        :rules="[rules.required]"
                                        v-model="form.username"
                                        name="username"
                                        label="Username"
                                        id="username"
                                    ></v-text-field>
                                    <v-text-field
                                        label="Password"
                                        v-model="form.password"
                                        :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[rules.required, rules.min]"
                                        :type="show ? 'text' : 'password'"
                                        name="input-10-1"
                                        hint="At least 8 characters"
                                        counter
                                        @click:append="show = !show"
                                    ></v-text-field>
                                    <v-spacer></v-spacer>
                                    <v-btn color="primary" @click="Register">Login</v-btn>
                                    <v-btn depressed color="secondary" @click="$router.back()">Back</v-btn>
                                </v-form>
                            </v-card-text>
                        </v-card>
                    </v-expand-transition>
                </v-flex>
            </v-layout>
        </v-container>
   </v-app>
</template>

<script>
export default {
   data: function () {
      return {
         darkTheme: true,
         // cred
         form: {
            name: '',
            email: '',
            username: '',
            password: '',
         },

         show: false,
         error: false,
         rules: {
            required: value => !!value || 'Required.',
            min: v => v.length >= 8 || 'Min 8 characters',
            emailMatch: () => (`The email and password you entered don't match`),
            emailRules: v => /.+@.+\..+/.test(v) || 'E-mail must be valid',
        },
      }
   },
   methods: {
        Register() {
            let valid = this.$refs.form.validate();
            if (valid) {
                this.form.password = this.$md5(this.form.password);
                this.axios.post('/registerAdmin', this.form).then(response => {
                    this.$router.push({name: 'login'});
                })
            }
        },
        handleRoute(value) {
            if (value === 'back') {
                window.open('/', '_self');
            } else if (value === 'register') {
                this.$router.push({
                name: 'register',
                })
            }
        }
   },

   mounted() {
   }
}
</script>

<style>

</style>