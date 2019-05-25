<template>
	<div>
		<v-container grid-list-md>
			<v-card>
				<v-card-title primary-title>
					<div class="title">Checkup page</div>
				</v-card-title>
				<v-card-text>
					<v-layout row wrap justify-center>
						<v-flex xs12 sm6 v-for="s in ['Left eye','Right eye']" :key="s">
							<v-container>
								<v-layout row wrap text-xs-center>
									<v-flex xs12>
										<div class="title">{{ s }}</div>
									</v-flex>
									<v-flex xs12 sm6 v-for="i in 2" :key="i">
										<v-img
											src="/res/retina.jpg"
											alt="eye"
											:height="$vuetify.breakpoint.xsOnly ? '100' : '200'"
										></v-img>
									</v-flex>
								</v-layout>
							</v-container>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap>
								<v-flex xs12 sm9>
									<v-text-field hide-details label="Attachment"></v-text-field>
								</v-flex>
								<v-flex xs12 sm3>
									<v-btn color="primary" dark round class="text-none">Upload</v-btn>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap>
								<v-flex xs12 sm9>
									<v-text-field hide-details label="Patient"></v-text-field>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap>
								<v-flex xs12 sm9>
									<v-text-field hide-details label="Clinic"></v-text-field>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap>
								<v-flex xs12 sm9>
									<v-text-field hide-details label="Date"></v-text-field>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap>
								<v-flex xs12 sm9>
									<v-textarea hide-details label="Description"></v-textarea>
								</v-flex>
							</v-layout>
						</v-flex>

						<v-flex xs12 sm9>
							<v-layout row wrap text-xs-center>
								<v-flex xs12 sm9>
									<v-btn color="primary" class="text-none" round large>Send</v-btn>
								</v-flex>
							</v-layout>
						</v-flex>
					</v-layout>
				</v-card-text>
			</v-card>
		</v-container>
	</div>
</template>

<script>
export default {
	data: () => ({}),
	mounted() {
		// this.$vuetify.rtl = true;
	}
};
</script>