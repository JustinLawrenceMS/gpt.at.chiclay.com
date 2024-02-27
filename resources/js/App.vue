<!-- todo: fix indents.  Fix disappearing space bar on chatbox input -->
<template>
  <div id="app">
    <header id="header">
      <nav id="nav">
        <ul>
          <li>
            <a href="#intro">Place<span class="extra">holder</span></a>
          </li>
<!--
          <li>
            <a href="#one">First<span class="extra"> Section</span></a>
          </li>
          <li>
            <a href="#two">Second<span class="extra"> Section</span></a>
          </li>
          <li>
            <a href="#three">Third<span class="extra"> Section</span></a>
          </li>
          <li>
            <a href="#contact">Contact<span class="extra"> Us</span></a>
          </li>
-->
          <!--<li><a href="#elements">Elements</a></li>-->
        </ul>
      </nav>
    </header>
    <HelloWorld msg="Welcome to JustinGPT" />
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
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  margin-top: 60px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
</style>
