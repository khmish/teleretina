<template>
	<v-app-bar app dense>
		<v-toolbar-title class="headline">
			<span class="font-weight-light">
				<strong class="font-weight-medium">Tele</strong>Retina
			</span>
		</v-toolbar-title>
		<v-spacer></v-spacer>
		<v-toolbar-items>
			<v-btn color="primary" text @click="showLogin" class="text-none">Login</v-btn>
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
								</v-layout>
							</v-container>
						</v-card-text>
						<v-card-actions>
							<v-spacer></v-spacer>
							<v-btn color="primary" class="text-none" text @click.native="loginShowing = false">Close</v-btn>
							<v-btn color="primary" class="text-none" text @click.native="loginShowing = false">Login</v-btn>
						</v-card-actions>
					</v-card>
				</v-dialog>
			</v-layout>
		</v-toolbar-items>
	</v-app-bar>
</template>

<script>
export default {
	data() {
		return {
			loginShowing: false,
		};
	},
	methods: {
		showLogin() {
			this.loginShowing = true;
		}
	}
};
</script>