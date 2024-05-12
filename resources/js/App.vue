<!-- todo: fix indents.  Fix disappearing space bar on chatbox input -->
<template>
    <div id="app">
    <header id="header">
      <nav id="nav">
      </nav>
    </header>
    <HelloWorld msg="Welcome to " />
    <br />
    <ChatBox />
  </div>
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import ChatBox from "./components/ChatBox.vue";
export default {
  name: "App",
  components: {
    ChatBox,
    HelloWorld,
  },
};
</script>

<style>
#app {
  font-family: "Kode Mono";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin-top: 60px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
@media only screen and (max-device-width: 600px) {
  #app {
    margin-top: 0px;
  }
}
@media only screen and (max-device-width: 1000px) {
  #app {
    margin-top: 0px;
  }
}
</style>
