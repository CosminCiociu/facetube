<template>
    <figure class="video">
      <iframe :src="videoLink" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

      </iframe>
    </figure>
</template>

<script>
// import ResponsiveImage from '@/components/utility/ResponsiveImage'
// import PostMeta from '@/components/utility/PostMeta'
// import PostTaxonomies from '@/components/utility/PostTaxonomies'

export default {
  name: 'VideoContainer',
  components: {
    // ResponsiveImage,
    // PostMeta,
    // PostTaxonomies
  },
  props: {
    videoLink: {
      type: String,
      required: false
    }
  },
  data() {
    return {
    }
  }
}
</script>

<style>
.video {
  margin: 0;
  width: 100%;
  height: 0;
  padding-top: 56.25%;
  background-color: #ccc;
  position: relative;
}
.video iframe {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 10px;
  overflow: hidden;
}

</style>
