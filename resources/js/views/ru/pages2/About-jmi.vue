<template>
<link rel="canonical" href="https://www.jmibrokers.com/ru/about-jmi " />
          <div class="row gray_bg">
          <div class="row gray_bg">
            <img src="/assets/img/clip_image002.jpg" alt="" class="img-responsive center-block picHeight" />
        </div>


        <div class="container">
            <div class="row gray_bg mrtb40">
                <h1 >    О JMIBrokers Group</h1>
                <p>
                    При выборе брокера важно убедиться, что он лицензирован и регулируется заслуживающим доверия государственным органом. Каждый лицензирующий орган контролирует практику работы финансовых компаний, обеспечивая строгое соблюдение всех правил. <br />
                    Сегодня JMI Brokers предоставляет своим клиентам возможность торговать широким спектром инструментов, включая валютные пары Forex, фьючерсы (OTC), драгоценные металлы, индексы и энергоносители, которые котируются на основных мировых биржах.
                    <br /><br />
                    За несколько лет она превратилась в известную компанию по оказанию финансовых услуг с обширной клиентурой из Европы, Ближнего Востока, Персидского залива, Северной Африки и Дальнего Востока.
                    JMI Group — ведущая независимая торговая компания FOREX, деривативов, акций и товаров. <br />
                    Компания предлагает розничным, институциональным, IB и White Label клиентам комплексный подход к торговле разнообразными финансовыми продуктами. Это делается с помощью современных автоматизированных торговых платформ и систем управления рисками. За последние три года мы внедрили множество улучшений во все сферы нашего бизнеса.<br />
                    Рост был достигнут благодаря сочетанию сильного лидерства, диверсификации продукции, передовых технологий и корпоративной культуры, которая привлекает и удерживает высококвалифицированных сотрудников и поощряет инициативу и инновации.<br />
                    Теперь у нас есть одни из самых обширных и самых технологически продвинутых ресурсов в нашей отрасли, а благодаря нашей растущей международной сети офисов мы можем удовлетворять торговые потребности наших клиентов практически в любой точке мира 24 часа в сутки.<br />
                    В отличие от других розничных форекс-брокеров, JMI Brokers зарекомендовала себя как лидер отрасли благодаря своей уникальной модели агентства «без дилингового центра», запатентованным инструментам и услугам, а также сосредоточению внимания на обслуживании клиентов. Это привело к более долгосрочным и более выгодным отношениям, а также проявилось в многочисленных наградах и отраслевых похвалах, которые получила JMI Brokers.<br />
                    Однако именно благодаря усилиям и самоотверженности наших сотрудников мы завоевали отличную репутацию в этой высококонкурентной отрасли. <br />
                    Этот веб-сайт даст вам краткое представление о мире JMI. Мы надеемся, что вы найдете его информативным, но лучший способ по-настоящему ощутить разницу с JMI Brokers — это связаться с нами!</p>
            </div>
        </div>
        </div>

</template>

<script>
import { useHead } from '@vueuse/head'
import {computed, reactive, ref} from "vue";
import axios from 'axios';
import {useRouter} from "vue-router";
const errors = ref()
const router = useRouter();

export default ({
    data(){
        return{
            site_title: `About JMI Brokers Group`,
            site_description: ``,
            site_keywords: '',

        }
    },
    mounted() {
        useHead({
            // Can be static or computed
            title: computed(() => this.site_title),
            meta: [
                {
                    name: `description`,
                    content: computed(() => this.site_description),
                },
                {
                    name: `keywords`,
                    content: computed(() => this.site_keywords),
                },
            ],

        })
    }
});
</script>
