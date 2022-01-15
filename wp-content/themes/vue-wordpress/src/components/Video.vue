<template>
  <main>
    
    <video-container :videoLink="video.content.rendered"/>


    <article v-if="video">
      <!-- <header>
        <h1 v-html="video.title.rendered"></h1>
      </header> -->
      <!-- <div v-html="video.content.rendered"></div> -->
    </article>
  </main>
</template>

<script>
import ResponsiveImage from '@/components/utility/ResponsiveImage'
import PostMeta from '@/components/utility/PostMeta'
import PostTaxonomies from '@/components/utility/PostTaxonomies'
import VideoContainer from '@/components/template-parts/VideoContainer'


export default {
  name: 'Video',
  components: { 
    ResponsiveImage,
    PostMeta,
    PostTaxonomies,
    VideoContainer
  },
  props: {
    slug: {
      type: String,
      required: false
    }
  },
  data() {
    return {
      request: {
        type: 'posts',
        slug: this.slug,
        showLoading: true 
      }
    }
  },
  computed: {
    video() {
      return this.$store.getters.singleVideoBySlug(this.request)
    }
  },
  methods: {
    getVideo() {
      this.$store.dispatch('getSingleVideoBySlug', this.request).then(() => {
        this.$store.dispatch('updateDocTitle', { parts: [ this.post.title.rendered, this.$store.state.site.name ] })
      })
    }
  },
  created() {
    this.getVideo()
    console.log(this.video);
  }
}
</script>
