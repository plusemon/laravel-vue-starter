<template>
	<Header></Header>
	<div class="main">
		<router-view></router-view>
	</div>
	<Footer></Footer>
</template>

<script>
	import Header from "./Header";
	import Footer from "./Footer";
	export default {
		components: { Header, Footer },
	};
</script>

<style lang="css">
	/* GLOBAL STYLES */
	body {
		font-family: system-ui;
	}
	a,
	a:hover {
		text-decoration: none;
	}
	ul {
		list-style: none;
	}
	/* CUSTOM STYLES */
	header {
		background: rgb(0, 0, 0);
	}
	nav {
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 1200px;
		height: 70px;
		margin: auto;
	}
	nav h1.brand a {
		font-size: 24pt;
		color: rgb(255, 255, 255);
	}
	nav ul {
		display: flex;
		margin: 0;
	}
	nav ul li a {
		background: #292929;
		color: white;
		padding: 10px 20px;
		margin: 0px 10px;
	}
	nav ul li a:hover,
	nav ul li a.router-link-exact-active {
		color: white;
		border-bottom: 2px solid;
	}

	footer {
		background: #d8d8d8;
		position: absolute;
		bottom: 0;
		width: 100%;
	}

	.main {
		display: flex;
		height: 500px;
		align-items: center;
	}

	footer p {
		margin: 0;
		padding: 10px;
		text-align: center;
	}
	footer span {
		color: red;
	}
</style>
