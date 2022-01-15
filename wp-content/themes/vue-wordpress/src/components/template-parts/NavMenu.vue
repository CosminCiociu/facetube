<template>
<div class="collapse navbar-collapse bg-dark" id="navbarNav">
  <ul class="navbar-nav">
    <li v-for="item in menu"
    class="nav-item">
        <a 
        class="nav-link"
        :key="item.id"
        :href="item.url"
        :target="item.target"
        :title="item.title"
        v-html="item.content"
        />
    </li>
  </ul>
</div>
</template>

<script>
export default {
  name: 'NavMenu',
  props: {
    name: {
      type: String,
      required: true
    }
  },
  data() {
    return {
    }
  },
  computed: {
    menu() {
      return this.$store.getters.menu({ name: this.name })
    }
  }
}
</script>
<style>

.main-menu {
  position: sticky;
  top: -1px;
  z-index: 2;
  font-size: 1.4rem;
  display: flex;
  flex-flow: row wrap;
  justify-content: flex-start;
  color: #fafafa;
  padding: 1rem 0;
  border-top: 1px solid rgba(0,0,0,.05);
  border-bottom: 1px solid rgba(0,0,0,.05);
  width: 30%;
}

.main-menu li {
  padding-left: 30px;
}
</style>