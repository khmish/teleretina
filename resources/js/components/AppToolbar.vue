<template>
	<v-toolbar app dense>
		<v-toolbar-title class="headline">
			<span>Tele</span>
			<span class="font-weight-light">Retina</span>
		</v-toolbar-title>
		<v-spacer></v-spacer>
		<v-toolbar-items>
			<v-btn color="primary" flat @click="showLogin" class="text-none">Login</v-btn>
			<v-layout row justify-center>
				<v-dialog v-model="loginShowing" persistent max-width="500px">
					<v-card>
						<v-card-title>
							<span class="headline">User Login</span>
						</v-card-title>
						<v-card-text>
							<v-container grid-list-md>
								<v-layout wrap>
									<v-flex xs12>
										<v-text-field label="Email" required></v-text-field>
									</v-flex>
									<v-flex xs12>
										<v-text-field label="Password" type="password" required></v-text-field>
									</v-flex>
									<v-flex xs12>
										<v-label>I am a</v-label>
										<v-radio-group v-model="userType">
											<v-radio color="primary" on-icon="mdi-hospital" label="Patient" :value="1"></v-radio>
											<v-radio color="primary" on-icon="mdi-eye" label="Eye Specialist" :value="2"></v-radio>
											<v-radio color="primary" on-icon="mdi-database-plus" label="Data Entry Clerk" :value="3"></v-radio>
										</v-radio-group>
									</v-flex>
								</v-layout>
							</v-container>
						</v-card-text>
						<v-card-actions>
							<v-spacer></v-spacer>
							<v-btn color="primary" class="text-none" flat @click.native="loginShowing = false">Close</v-btn>
							<v-btn color="primary" class="text-none" flat @click.native="loginShowing = false">Login</v-btn>
						</v-card-actions>
					</v-card>
				</v-dialog>
			</v-layout>
		</v-toolbar-items>
	</v-toolbar>
</template>

<script>
export default {
	data() {
		return {
			loginShowing: false,
			userType: 1
		};
	},
	methods: {
		showLogin() {
			this.loginShowing = true;
		}
	}
};
</script>