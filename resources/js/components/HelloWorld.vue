<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      This is the scoobiest GPT of all the JustinGPTs.<br>
      Check out the
      <a href="https://linkedin.com/company/chiclay-s/" target="_blank" rel="noopener">Creators</a>.
    </p>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1 {
  font-size: 4vh;
}
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
