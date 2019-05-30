<template>
	<div>
		<v-parallax
			src="https://image.shutterstock.com/z/stock-photo-optometry-concept-female-optometrist-optician-doctor-examines-eyesight-of-child-boy-in-eye-261198167.jpg"
		>
			<v-container
				fill-height
				class="my-5"
				style="background:rgba(255,255,255,0.5); border-radius: 50px"
			>
				<v-layout row wrap align-content-center align-center class="black--text">
					<v-flex xs12 md2 shrink text-xs-center text-md-right>
						<v-img src="/res/logo.png" contain height="96"></v-img>
					</v-flex>
					<v-flex expand text-xs-center text-md-left>
						<h1 class="display-2">
							Welcome to
							<span class="primary--text font-weight-bold">Tele</span>Retina
						</h1>
					</v-flex>
					<v-flex xs12 text-xs-left>
						<p class="subheading font-weight-regular pt-4 mt-3">{{ headline }}</p>
					</v-flex>
				</v-layout>
			</v-container>
		</v-parallax>

		<v-container grid-list-lg>
			<v-layout text-xs-center wrap row justify-center>
				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4>
								<v-icon large class="primary--text">mdi-information</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">About Us</div>
							</v-flex>
							<v-flex
								xs7
								sm6
								lg8
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fuga, sunt, laborum nobis, sequi iusto cumque ea debitis mollitia quos inventore a unde. Quod quam laudantium natus nisi culpa consequatur!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4 order-xs2 order-md1>
								<v-icon large class="primary--text">mdi-eye</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Vision</div>
							</v-flex>
							<v-flex
								xs7
								sm6
								lg8
								order-xs1
								order-md2
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus harum ut ipsum error autem eum!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4 order-xs1 order-md2 order-lg1>
								<v-icon large class="primary--text">mdi-lightbulb-on</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Message</div>
							</v-flex>
							<v-flex
								xs7
								sm6
								lg8
								order-xs2
								order-md1
								order-lg2
							>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, ab odit quisquam obcaecati adipisci pariatur, unde maiores, placeat dolor eveniet rem architecto laudantium facere exercitationem non dicta? Veritatis, totam vero!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4 order-xs2 order-md2>
								<v-icon large class="primary--text">mdi-flag</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Goals</div>
							</v-flex>
							<v-flex
								xs7
								sm6
								lg8
								order-xs1
								order-md1
							>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident quibusdam delectus assumenda minus quisquam quod architecto reprehenderit. Recusandae, eius minima.</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4 order-lg2>
								<v-icon large class="primary--text">mdi-image-filter-hdr</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Our Target</div>
							</v-flex>
							<v-flex
								xs7
								sm6
								lg8
								order-lg1
							>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque vero corporis fugit!</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 md6 lg4>
					<v-container class="grey lighten-4 round" fill-height>
						<v-layout row wrap text-xs-center align-center>
							<v-flex xs5 sm6 lg4 order-xs2 order-md1 order-lg2>
								<v-icon large class="primary--text">mdi-help</v-icon>
								<div class="headline pt-2 pb-2 primary--text font-weight-bold">Some action</div>
							</v-flex>
							<v-flex xs7 sm6 lg8 order-xs1 order-md2 order-lg1>
								<v-btn color="primary text-none" rounded>Action</v-btn>
							</v-flex>
						</v-layout>
					</v-container>
				</v-flex>

				<v-flex xs12 mt-2>
					<v-container class="pa-0 py-5 my-5" style="border: 1px dashed grey">
						<div class="headline font-weight-bold">Advertisement Panel</div>
					</v-container>
				</v-flex>
			</v-layout>
		</v-container>
	</div>
</template>

<script>
export default {
	data: () => ({
		headline:
			"Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque atque error porro repellat numquam ex sed. Tempora repellendus soluta sequi officiis, dignissimos aliquam sint distinctio sapiente suscipit aut laborum natus!."
	}),
	mounted() {
		// this.$vuetify.rtl = true;
	}
};
</script>

<style>
.round {
	border-radius: 15px;
}

.primary--text .v-label {
	color: inherit;
}
</style>