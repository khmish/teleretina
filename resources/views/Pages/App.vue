<script>
export default new Vue({
	el: "#app",
	mixins: [require("../../js/mixins/vuetify-mixin.vue").default],
	data() {
		return {
			items: [
				{ title: "Home", link: "/" },
                { title: "Theme2", link: "/theme2" },
                { title: "Theme3", link: "/theme3" },
				{ title: "Report", link: "/report" },
                { title: "Checkup", link: "/checkup" },
			]
		};
	}
});
</script>