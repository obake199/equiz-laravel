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
                              {{'EQUIZ Login'}}
                           </h3>
                        </v-layout>
                     </v-card-title>
                     <v-divider></v-divider>
                     <v-card-text>
                        <v-alert type="success" v-if="registerSession !== ''">
                           {{registerSession}}
                        </v-alert>
                        <p>Sign in with your username and password.</p>
                        <v-form>
                           <v-text-field
                              :rules="[rules.required]"
                              v-model="username"
                              name="username"
                              label="Username"
                              id="username"
                           ></v-text-field>
                           <v-text-field
                              label="Password"
                              v-model="password"
                              :append-icon="show ? 'mdi-eye' : 'mdi-eye-off'"
                              :rules="[rules.required, rules.min]"
                              :type="show ? 'text' : 'password'"
                              name="input-10-1"
                              hint="At least 8 characters"
                              counter
                              @click:append="show = !show"
                           ></v-text-field>
                        </v-form>
                        <v-spacer></v-spacer>
                        <v-btn color="primary" @click="Login" :disabled="!password || !username">Login</v-btn>
                        <v-btn depressed color="secondary" @click="handleRoute('back')">Back</v-btn>
                        <v-divider></v-divider>
                        <v-card-subtitle>
                           No Account? Register <a @click="handleRoute('register')" href="">here</a>
                        </v-card-subtitle>
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
         username: '',
         password: '',

         show: false,
         error: false,
         rules: {
            required: value => !!value || 'Required.',
            min: v => v.length >= 8 || 'Min 8 characters',
            emailMatch: () => (`The email and password you entered don't match`),
        },
        registerSession: '',
      }
   },
   methods: {
      Login() {
         let form = new FormData();
         form.append('username', this.username);
         form.append('password', this.password);
         this.axios.post('/loginCred', form);
      },
      handleRoute(value) {
         if (value === 'back') {
            window.open('/', '_self');
         } else if (value === 'register') {
            this.$router.push({
               name: 'register',
            })
         }
      },
      getLoginCommon() {
         this.axios.get('/logindata').then(response => {
            let res = response.data;
            this.registerSession = res;
         })
      }
   },

   mounted() {
      this.getLoginCommon();
   }
}
</script>

<style>

</style>