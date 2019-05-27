<template>
	<v-footer height="auto" class="grey darken-3">
		<v-layout row wrap justify-center>
			<v-flex xs12 class="white--text text-xs-center">
				<v-btn
					v-for="icon in icons"
					:key="icon"
					class="white--text"
					icon
					:class="{'mx-2': $vuetify.breakpoint.xsOnly, 'mx-3':!$vuetify.breakpoint.xsOnly}"
				>
					<v-icon size="24px">{{ icon }}</v-icon>
				</v-btn>
			</v-flex>

			<v-flex xs12 class="white--text text-xs-center">
				<v-btn flat dark class="text-none">Home</v-btn>
				<v-btn flat dark class="text-none">About Us</v-btn>
				<v-btn flat dark class="text-none">Contact Us</v-btn>
			</v-flex>

			<v-flex xs12 py-3 text-xs-center white--text>
				&copy;2019 —
				<strong>
					<span class="font-weight-light">
						<strong class="font-weight-medium">Tele</strong>Retina
					</span>
				</strong>
			</v-flex>
		</v-layout>
	</v-footer>
</template>

<script>
export default {
	data() {
		return {
			icons: [
				"mdi-facebook",
				"mdi-twitter",
				"mdi-youtube",
				"mdi-linkedin",
				"mdi-instagram"
			]
		};
	}
};
</script>